<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_manager";
$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
//If connection correct message
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT projects.id as id, project_name, name_e FROM projects
LEFT JOIN employees ON employees.project_id = projects.id ORDER BY id asc;";
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
            echo "<tr> <td>" . $row['id'];
            echo "</td> <td> " . $row['project_name'];
            echo "</td> <td> " . $row['name_e'];
            echo "</td> <td> " . 'Delete/Update' . "</td></tr>";
        }
    }
    ?>
</tbody>