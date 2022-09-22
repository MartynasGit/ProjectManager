<?php
if (isset($_GET['id'])) {
        $stmt = $conn->prepare("DELETE FROM projects WHERE id = (?);");
        $stmt->bind_param("i", $id);
        $id = $_GET['id'];
        $stmt->execute();
        $stmt->close();
        header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Projects');
        die;
}
?>


