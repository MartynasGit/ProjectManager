<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Employee</th>
            <th scope="col">Project</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($emplyeesArray)) {
            foreach ($emplyeesArray as $employee) {
                echo '<tr> <td>' . $employee['id'] . '</td>';
                echo  '<td>' . $employee['name_e'] . '</td>';
                echo '<td>' . $employee['project_name'] . '</td>';
                echo '<td><a href="/Db/?path=edit_employee&id=' . $employee['id'] . '" class="btn btn-primary me-2">' . '<i class="bi bi-pencil-square me-1"></i></a>';
                echo '<a href="/Db/?path=delete_emplyee&id=' . $employee['id'] . '" class="btn btn-primary">' . '<i class="bi bi-trash3-fill me-1"></i></i></a></tr>';
            }
        } else {
            echo '<h2>0 results</h2>';
        }
        ?>
    </tbody>
</table>
<div class="col-3 mt-3">
    <form action="/Db/?path=Employees" method="post">
        <div class="form-group">
            <label for="name">Create new employee</label>
            <input type="text" required id="name" placeholder="Name" name="employee" class="form-control">
            <input type="hidden" name="createEmplyee">
        </div>
        <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>