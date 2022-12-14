<?php
require_once('./src/db_connection.php');
require_once('./src/db_modification.php');
require_once('./src/errors.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Project Manager</title>
    <link href="./src/styles/styles.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-primary text-light p-0" id="nav">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./?path=Projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./?path=Employees">Employees</a>
                    </li>
                </ul>
            </div>
        </div>
        <span style="width: 20%;" class="fs-2 me-2">Project Manager</span>
    </nav>
    <div>
        <div class="content-wrap container container-min-height">
            <!-- RENDER TABLE OR DELETION -->
            <?php
            if (isset($_GET['path'])) {
                switch ($_GET['path']) {
                    case "Employees":
                        include('./src/employees.php');
                        break;
                    case "edit_employee":
                        include('./src/edit_employee.php');
                        break;
                    case "edit_project":
                        include('./src/edit_project.php');
                        break;
                    case "delete_emplyee":
                        include('./src/delete_project_employee.php');
                        break;
                    case "delete_project":
                        include('./src/delete_project_employee.php');
                        break;
                    default:
                        include('./src/projects.php');
                }
            } else
                include('./src/projects.php');
            mysqli_close($conn);
            ?>
        </div>
        <!-- FOOTER -->
        <footer class="bg-secondary text-light text-center p-2">
            <span> ?? <?php echo date("Y") ?>
                <a href="https://github.com/MartynasGit" target="_blank" class="text-light">MartynasGit</a>
            </span>
        </footer>
    </div>
</body>

</html>