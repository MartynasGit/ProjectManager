<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary text-light">
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
        <span style="width: 20%;" class="fs-2">Project Manager</span>
    </nav>
    <!-- Table -->
    <table class="table">
        <?php

        if (isset($_GET['path']) and  $_GET['path'] == "Employees") {
            include('./employees.php');
        } else {
            include('./projects.php');
        }
        ?>
    </table>

</body>

</html>