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
    <title>Project Manager</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
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
        <span style="width: 20%;" class="fs-2 me-2">Project Manager</span>
    </nav>
    <div class="container-min-height">
        <div class="content-wrap container">
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
        </div>
        <!-- FOOTER -->
        <footer class="bg-primary text-light text-center p-3">
            <span> © <?php echo date("Y"); ?>
                <a href="https://github.com/MartynasGit" target="_blank" class="text-light">MartynasGit</a>
            </span>
        </footer>
    </div>
</body>

</html>