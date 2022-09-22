<?php
$project_Id = $_GET['id'];
$sql = "DELETE FROM projects
        WHERE id =" . $project_Id . ";";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: ' . $_SERVER['PHP_SELF'] .'?path=Projects');
die;
?>