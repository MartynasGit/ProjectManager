<?php
$sql = "SELECT projects.id as id, project_name, group_concat(name_e separator ' ,') as employee 
        FROM projects 
        LEFT JOIN employees ON employees.project_id = projects.id
        GROUP BY project_name
        ORDER BY id asc;";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
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
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> <td>' . $row['id'] . '</td>';
            echo  '<td>' . $row['project_name'] . '</td>';
            echo '<td>' . $row['employee'] . '</td>';
            echo '<td><form>' . '<button class="btn btn-primary me-2"> <i class="bi bi-pencil-square me-1"></i></button>';
            echo  '<button class="btn btn-primary"><i class="bi bi-trash3-fill me-1"></i></button></form></td></tr>';
        }
    }
    ?>
</tbody>