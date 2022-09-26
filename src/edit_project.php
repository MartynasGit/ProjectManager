<?php
$currentId = $_GET['id'];
$sql =
    "SELECT project_name, id FROM projects
WHERE projects.id = " . $currentId . ";";
$result = mysqli_query($conn, $sql);
$projects = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<div class="col-4 mx-auto">
    <h3 class="text-center pt-3">Currently editing</h3>
    <div class="card mb-3" style="width: 27rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-light">
                <b>Id:</b>
                <?php echo $projects['id']; ?>
            </li>
            <li class="list-group-item bg-light">
                <b>Project name:</b>
                <?php echo $projects['project_name']; ?>
            </li>
        </ul>
    </div>

    <form action="/ProjectManager/?path=Projects" method="post">
        <div class="form-group">
            <label for="id">Projects id</label>
            <input type="number" required id="id" placeholder="New id" name="idNew" class="form-control" value="<?php echo $projects['id'] ?>">
        </div>
        <div class="form-group">
            <label for="name">Projects name</label>
            <input type="text" required name="project" id="name" placeholder="New name" class="form-control" value="<?php echo $projects['project_name'] ?>">
            <input type="hidden" name="editProject">
            <input type="hidden" name="id" value="<?php echo $projects['id'] ?>">
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>