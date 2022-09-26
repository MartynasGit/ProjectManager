<?php
if (isset($_GET['id']) && $_GET['path'] == "delete_emplyee") {
        $stmt = $conn->prepare("DELETE FROM employees WHERE id = (?);");
        $stmt->bind_param("i", $id);
        $id = $_GET['id'];
        $stmt->execute();
        $stmt->close();
        header('Location: ./?path=Employees');
        die;
}

if (isset($_GET['id']) && $_GET['path'] == "delete_project") {
        $stmt = $conn->prepare("DELETE FROM projects WHERE id = (?);");
        $stmt->bind_param("i", $id);
        $id = $_GET['id'];
        $stmt->execute();
        $stmt->close();
        header('Location: ./?path=Projects');
        die;
}
