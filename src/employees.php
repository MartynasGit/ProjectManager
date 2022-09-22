<?php
$sql = "SELECT employees.id as id , name_e, project_name
        FROM employees
        LEFT JOIN projects ON employees.project_id = projects.id;";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
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
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr> <td>' . $row['id'] . '</td>';
                echo  '<td>' . $row['name_e'] . '</td>';
                echo '<td>' . $row['project_name'] . '</td>';
                echo '<td><a href="/Db/?path=edit_employee&id=' . $row['id'] . '" class="btn btn-primary me-2">' . '<i class="bi bi-pencil-square me-1"></i></a>';
                echo '<a href="/Db/?path=delete_emplyee&id=' . $row['id'] . '" class="btn btn-primary">' . '<i class="bi bi-trash3-fill me-1"></i></i></a></tr>';
            }
        } else {
            echo '<p>0 results</p>';
        }
        ?>
    </tbody>
</table>