<?php
echo $_GET['id'];
$emp_Id = $_GET['id'];
$sql = "DELETE FROM employees
        WHERE id =" . $emp_Id . ";";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Employees' );
die;
?>