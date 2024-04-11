<?php
session_start();
// if(empty($_SESSION['id']) || empty($_SESSION['username'])){
//     header("Location: index.php");
// }
// else if (!isset($_SESSION['id']) && !isset($_SESSION['username'])) {
//     header("Location: index.php");
// }else{
//     header("Location: welcome.php");
// }
$uname = $_SESSION["username"];
?>

<?php

include 'database/db.php';
$db = new DB();
if (isset($_GET['mid'])) {
    $mid = $_GET['mid'];
} else {
    $mid = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard_style.css" />
    <title>Nexushub | Dashboard</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class=" sidebar " id="sidebar-wrapper">
            <a href="index.php">
                <div class="sidebar-heading  py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="images/logo.png" alt="" srcset="" width="50px" height="50px">NEXUS HUB</div>
            </a>
            <div class="list-group list-group-flush my-3">
                <a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <!-- <a href="admintab.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-users-cog me-2"></i>Admins</a> -->
                <a href="users.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-users me-2"></i>Users</a>
                <a href="add_item_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-edit me-2"></i>Add Itmes</a>
                <!-- <a href="addModule.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-sitemap me-2"></i>Add Module</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-gift me-2"></i>Comments/Likes</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Comments/Likes</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>      -->
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
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
                                        <?php echo $_SESSION['username'] ?>
                                    </span>
                                </a>

                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">

                <div class="page-header mb-5">
                    <h1>User Details </h1>

                </div>
                <style>
                    .image-box {
                        width: 35%;
                        box-shadow: inset;
                        margin-left: 10px;
                        position: sticky;
                        top: 3rem;
                        margin-bottom: 98px;
                    }

                    .form-box {
                        background: rgba(255, 255, 255, 0.2);

                        width: 55%;
                        justify-content: center;
                        padding-top: 4rem;
                    }
                </style>
                <div class="row container-fluid ms-5  ">
                <div class="row my-5 ">
        <h3 class=" mb-3 table-heading"> <i class="fab fa-staylinked"></i> All Info : </h3>
        <div class="col ">
            <table class="table  shadow-sm  table-hover rounded">
                <thead>
                    <tr class="heading-row">
                        <th scope="col" width="50">User Id</th>
                      
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    
                        $mname = $db->fetch_all_user();
                        
                            foreach ($mname as $un) {
                              echo "
                            <tr>
                                <th scope='row' style='color:red;'>" . $un["uid"] . "</th>                       
                                <td  style='color:green;'>" . $un["username"] . "</td>
                                <td  style='color:blue;'>" . $un["fullname"] . "</td>
                                <td  style='color:blue;'>" . $un["email"] . "</td>
                                <td>" . $un["phone"] . "</td>
                                <td>" . $un["gender"] . "</td>
                                <td>
                                <a class='btn btn-primary' href='delete-user.php?id=" . $un["uid"] . "'>Remove </a></td>
                                
                            </tr> ";
                              
                            }
                           
                        
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>
                </div>
                <div class="footer">
                    <style>
                        .footer {
                            width: 100%;
                            height: 10px;
                            background: #0ff345;
                            position: relative;
                            margin-top: 70px;
                        }

                        .btn {
                            /* align-items: center; */
                            margin-left: 10%;
                        }
                    </style>
                </div>


            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
           

        </div>
    </div>
</body>

</html>
<!-- add details in databse -->

