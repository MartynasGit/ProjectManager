<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_manager";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) die("Connection failed: " . mysqli_connect_error());

if (isset($_GET['path']) and  ($_GET['path'] == 'Employees' or $_GET['path'] == 'edit_employee')) {
    $sql = "SELECT employees.id as id , name_e, project_name
        FROM employees
        LEFT JOIN projects ON employees.project_id = projects.id;";
    $result = mysqli_query($conn, $sql);
    $emplyeesArray = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($emplyeesArray, $row);
        }
    }
} else {
    $sql = "SELECT projects.id as id, project_name, group_concat(name_e separator ' ,') as employee 
        FROM projects 
        LEFT JOIN employees ON employees.project_id = projects.id
        GROUP BY project_name
        ORDER BY id asc;";
    $result = mysqli_query($conn, $sql);
    $projectsArray = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($projectsArray, $row);
        }
    }
}
