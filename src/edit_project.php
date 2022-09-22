<?php
$currentId = $_GET['id'];
$sql =
    "SELECT project_name, id FROM projects
WHERE projects.id = " . $currentId . ";";
$result = mysqli_query($conn, $sql);
$projects = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<div class="col-4 mt-5">
    <h3 class="text-center">Currently editing</h3>
    <div class="card mb-3" style="width: 27rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <b>Id:</b>
                <?php echo $projects['id']; ?>
            </li>
            <li class="list-group-item">
                <b>Project name:</b>
                <?php echo $projects['project_name']; ?>
            </li>
        </ul>
    </div>

    <form action="/Db/?path=Projects" method="post">
        <div class="form-group">
            <label for="name">Projects name</label>
            <input type="text" required name="employees" id="name" placeholder="New name" class="form-control" value="<?php echo $projects['project_name'] ?>">
            <input type="hidden" value=<?php echo $projects['id'] ?> name="id">
            <input type="hidden" name="editProject">
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>