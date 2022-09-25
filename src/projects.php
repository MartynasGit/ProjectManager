<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Project</th>
            <th scope="col">Employees</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($projectsArray)) {
            foreach ($projectsArray as $project) {
                echo '<tr> <td>' . $project['id'] . '</td>';
                echo  '<td>' . $project['project_name'] . '</td>';
                echo '<td>' . $project['employee'] . '</td>';
                echo '<td><a href="/Db/?path=edit_project&id=' . $project['id'] . '" class="btn btn-primary me-2">' . '<i class="bi bi-pencil-square me-1"></i></a>';
                echo '<a href="/Db/?path=delete_project&id=' . $project['id'] . '" class="btn btn-primary">' . '<i class="bi bi-trash3-fill me-1"></i></i></a></tr>';
            }
        } else {
            echo '<h2>0 results</h2>';
        }
        ?>
    </tbody>
</table>
<div class="col-3 mt-3">
    <form action="/Db/?path=Projects" method="post">
        <div class="form-group">
            <label for="name">Create new project</label>
            <input type="text" required id="name" placeholder="Name" name="project" class="form-control">
            <input type="hidden" name="createProject">
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>