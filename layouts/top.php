<?php
session_start();
if(empty($_SESSION['id']) || empty($_SESSION['username'])){
    header("Location: index.php");
}
else if (!isset($_SESSION['id']) && !isset($_SESSION['username'])) {
    header("Location: index.php");
}
$uname= $_SESSION['username'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="css/dashboard.css" />
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <title>Nexushub | Dashboard</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    </head>

    <body>
        
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class=" sidebar " id="sidebar-wrapper">
    <a href="index.php"> <div class="sidebar-heading  py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="images/logo.png" alt="" srcset="" width="50px" height="50px">NEXUS HUB</div></a>
        <div class="list-group list-group-flush my-3">
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>


            <a href="additem.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-edit me-2"></i>Add Items</a>
            <!-- <a href="addModule.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-sitemap me-2"></i>Add Module</a> -->
            <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-gift me-2"></i>Comments/Likes</a> -->
            <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Comments/Likes</a> -->
            <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>      -->
            <a href="logout.php" class="list-group-item align-bottom list-group-item-action bg-transparent text-danger logout fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 halftone">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="options">
                        <li class="nav-item dropdown fs-5">
                            <a class="nav-link dropdown-toggle second-text fw-bold " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                                <span class="admin-name second-text">
                                    <?php echo $uname; ?>
                                </span>
                            </a>

                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="user_profile.php">Profile Changes</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                    </div>
                    </li>
                </ul>
            </div>
        </nav>
<hr>