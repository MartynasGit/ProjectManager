<?php
$uri = $_SERVER['REQUEST_URI'];
print('<h1>' . $uri . '</h1>');
$sql = "SELECT employees.id as id , name_e, project_name
        FROM employees
        LEFT JOIN projects ON employees.project_id = projects.id;";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
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
            echo '<td><form action="./?path=Employee">' . '<button class="btn btn-primary me-2" value="edit"> <i class="bi bi-pencil-square me-1"></i></button>';
            echo  '<button class="btn btn-primary" value="delete"><i class="bi bi-trash3-fill me-1"></i></button></form></td></tr>';
        }
    }
    ?>
</tbody>