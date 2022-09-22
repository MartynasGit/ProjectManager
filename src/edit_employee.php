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
// print_r(mysqli_num_rows($resultProjectList));
// print_r($resultProjectList);
// print_r($employee);
// print_r($allprojects)

$allprojects = [];
if (mysqli_num_rows($resultProjectList) > 0) {
    while ($row = mysqli_fetch_assoc($resultProjectList)) {
        array_push($allprojects, $row);
    }
}
mysqli_close($conn);
?>


<div class="col-4 mt-5">
    <h3 class="text-center">Currently editing</h3>
    <div class="card mb-3" style="width: 27rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <b>Id:</b>
                <?php echo $employee['idx'] ?>
            </li>
            <li class="list-group-item">
                <b>Name:</b>
                <?php echo $employee['name_e']; ?>
            </li>
            <li class="list-group-item">
                <b>Project:</b>
                <?php echo $employee['project_name'] ?? "No project added"; ?>
            </li>
        </ul>
    </div>

    <form action="/Db/?path=Employees" method="post">
        <div class="form-group">
            <label for="name">Employee's name</label>
            <input type="text" required name="employees" id="name" placeholder="New name" class="form-control" value="<?php echo $employee['name_e'] ?>">
            <input type="hidden" value=<?php echo $currentId ?> name="id">
        </div>
        <div class="form-group mt-2">
            <label for="projects">Project worked on</label>
            <select size="7" class="form-control" required id="projects" name="projects">
                <?php
                foreach ($allprojects as $option) {
                    if ($option['project_name'] == $employee['project_name']) {
                        echo '<option selected>' . $option['project_name'] . '</option>';
                    } else {
                        echo '<option>' . $option['project_name'] . '</option>';
                    }
                }
                ?>
                <option>-----</option>
            </select>
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>