<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport_list";

$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
//If connection correct message
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully <br>";

$sql = "SELECT id, person, update_date FROM people";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row['id'] . " - Person: " . $row['person'] . " - Date: " . $row['update_date'] . "<br>";
//     }
// }

mysqli_close($conn);
?>


<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Project date</th>
    </tr>
</thead>
<tbody>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>" . $row['id'];
            echo "</td> <td> " . $row['person'];
            echo "</td> <td> " . $row['update_date'] . "</td></tr>";
        }
    }
    ?>
</tbody>