<?php
//EDIT PROJECT LOGIC
if (isset($_POST['editProject']) && isset($_POST['project'])) {
    try {
        $stmt = $conn->prepare("UPDATE projects SET project_name = (?), id = (?) WHERE id = (?);");
        $stmt->bind_param("sii", $name, $newId, $id);
        $id = $_POST['id'];
        $newId = $_POST['idNew'];
        $name = $_POST['project'];
        $stmt->execute();
        $stmt->close();
        header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Projects');
        die;
    } catch (EXCEPTION) {
        $error = '<p class="text-danger">Error editing project</p>';
    }
}
// EDIT EMPLOYEE LOGIC
if (isset($_POST['editEmployee']) && isset($_POST['employees'])) {
    try {
        $stmt = $conn->prepare("UPDATE employees SET name_e = (?), project_id = (?), id = (?) WHERE id = (?);");
        $stmt->bind_param("siii", $name, $project, $newId, $id);
        $id = $_POST['id'];
        $name = $_POST['employees'];
        $newId = $_POST['idNew'];
        $project = $_POST['project'];
        $stmt->execute();
        $stmt->close();
        header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Employees');
        die;
    } catch (EXCEPTION) {
        $error = '<p class="text-danger">Error editing employee</p>';
    }
}
// CREATE PROJECT LOGIC
if (isset($_POST['createProject'])) {
    $stmt = $conn->prepare("INSERT INTO projects (project_name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $name = $_POST['project'];
    $stmt->execute();
    $stmt->close();
    header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Projects');
    die;
}
// CREATE EMPLOYEE LOGIC
if (isset($_POST['createEmplyee'])) {
    $stmt = $conn->prepare("INSERT INTO employees (name_e) VALUES (?)");
    $stmt->bind_param("s", $name);
    $name = $_POST['employee'];
    $stmt->execute();
    $stmt->close();
    header('Location: ' . $_SERVER['PHP_SELF'] . '?' . 'path=Employees');
    die;
}
