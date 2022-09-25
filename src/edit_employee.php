<?php
$currentId = $_GET['id'];
$sql = "SELECT name_e, project_name, employees.id as idx 
FROM employees
LEFT JOIN projects ON employees.project_id = projects.id
WHERE employees.id = " . $currentId . ";";
$sqlProjects = "SELECT * FROM projects;";
$result = mysqli_query($conn, $sql);
$resultProjectList = mysqli_query($conn, $sqlProjects);
$employee = mysqli_fetch_assoc($result);
$allprojects = [];
if (mysqli_num_rows($resultProjectList) > 0) {
    while ($row = mysqli_fetch_assoc($resultProjectList)) {
        array_push($allprojects, $row);
    }
}
mysqli_close($conn);
?>
<div class="col-4 mx-auto">
    <h3 class="text-center pt-3">Currently editing</h3>
    <div class="card mb-3" style="width: 27rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-light">
                <b>Id:</b>
                <?php echo $employee['idx'] ?>
            </li>
            <li class="list-group-item bg-light">
                <b>Name:</b>
                <?php echo $employee['name_e']; ?>
            </li>
            <li class="list-group-item bg-light">
                <b>Project:</b>
                <?php echo $employee['project_name'] ?? "No project added"; ?>
            </li>
        </ul>
    </div>

    <form action="/Db/?path=Employees" method="post">
        <div class="form-group">
            <label for="id">Employee's id</label>
            <input type="number" required id="id" placeholder="New id" name="idNew" class="form-control" value="<?php echo $employee['idx'] ?>">
        </div>
        <div class="form-group">
            <label for="name">Employee's name</label>
            <input type="text" required name="employees" id="name" placeholder="New name" class="form-control" value="<?php echo $employee['name_e'] ?>">
            <input type="hidden" name="editEmployee">
            <input type="hidden" name="id" value="<?php echo $employee['idx'] ?>">
        </div>
        <div class="form-group mt-2">
            <label for="projects">Project worked on</label>
            <select size="7" class="form-control" required id="projects" name="project">
                <?php
                foreach ($allprojects as $option) {
                    if ($option['project_name'] == $employee['project_name']) {
                        echo '<option selected value ="' . $option['id'] . '">' . $option['project_name'] . '</option>';
                    } else {
                        echo '<option value ="' . $option['id'] . '">' . $option['project_name'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>