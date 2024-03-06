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
    <link rel="icon" type="image/x-icon" href="./images/website_icon.png">
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
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-users me-2"></i>Users</a>
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
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">

                <div class="page-header mb-5">
                    <h1>Add Item</h1>

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
                    <div class="col-3 image-box">
                        <div class="add-img  flex" style="width: 350px;">
                            <img src="images/add-item.png" alt="" srcset="" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="col-12  form-box  flex pd-4" style="width: 700px;padding: bottem 10px;">
                        <form class=" ms-2 mb-5" action="#" method="post">
                            <div class="row mb-3">

                                <div class="col-sm-5">
                                    <select class="form-select form-select-sm " onchange="fillSubCategory()" id="module_name" name="module-name" aria-label="Small select example">

                                        <?php
                                        $module_list = $db->fetch_modules_list();

                                        foreach ($module_list as $ml) {
                                            if ($mid == $ml["mid"]) {
                                                $s = "selected";
                                            }
                                            echo "<option value=" . $ml["mid"] . " $s >" . $ml["module_name"] . "</option>";
                                            $s = "";
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="col-sm-5 ms-4">
                                    <select class="form-select form-select-sm  " name="cat-name" aria-label="Small select example">

                                        <?php
                                        $cat_list = $db->fetch_category_list($mid);

                                        foreach ($cat_list as $cl) {

                                            echo "<option value=" . $cl["mid"] . ">" . $cl["cat_name"] . "</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3 title">
                                <label for="title" class="col-sm-2 col-form-label ">Title </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control mt-2" width="20" id="tbTitle" name="tbTitle">
                                </div>
                            </div>

                            <div class="row mb-3 description">
                                <label for="Description" class="col-sm-2 col-form-label ">Description</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control mt-2" name="tdDescription" id="tdDescription" cols="40" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3 contentArea">
                                <label for="contentArea" class="col-sm-2 col-form-label ">Content </label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control mt-2" name="tdContentArea" id="tdContentArea" cols="40" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3 publish-details">
                                <label for="tbPublish" class="col-sm-2 col-form-label ">Publish name : </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control " id="tbePublishBy" name="tbPublishBy" text="<?php echo $uname; ?>" value="<?php echo $uname; ?>">

                                </div>

                                <!-- <label for="datePublish" class="col-sm-2 col-form-label">Publish Date </label>
                <div class="col-sm-3">
                    <input type="date" min="2017-04-01" max="2017-04-30" class="form-control " id="datePublish" name="dtPublishDate">

                </div> -->
                            </div>
                            <div class="row mb-3 media-box">
                                <label for="filePhoto" class="col-sm-2 col-form-label ">Photo </label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control " id="filePhoto" name="photopath">

                                </div>
                            </div>
                            <div class="row mb-3 media-box">
                                <label for="video-link" class="col-sm-2 col-form-label">Video link </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " id="video-link" name="tbvideopath">

                                </div>
                            </div>
                            <div class="row mb-3 test-link">
                                <label for="test-link" class="col-sm-2 col-form-label">Test link </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " id="test-link" name="tbTestLink">

                                </div>
                            </div>
                            <div class="row mb-3 keywords">
                                <label for="keywords" class="col-sm-2 col-form-label">Tags </label>
                                <div class="col-sm-3">
                                    <textarea type="text" class="form-control " id="keywords" cols="20" name="tbKeywords"> </textarea>

                                </div>
                            </div>
                            <div class="row mb-3 timebox">
                                <label for="time-tb" class="col-sm-2 col-form-label">Time Duration </label>
                                <div class="col-sm-8 mt-2">
                                    <!-- <input type="time" class="form-control " id="timeDuration" name="tbTimeDuration"  > -->
                                    <label for="hours"> Hours:</label>
                                    <select id="hours" name="hours" onchange="updateDuration()">
                                        <?php
                                        // Populate hours dynamically
                                        for ($i = 0; $i <= 23; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>

                                    <label for="minutes"> Minutes:</label>
                                    <select id="minutes" name="minutes" onchange="updateDuration()">
                                        <?php
                                        // Populate minutes dynamically
                                        for ($i = 0; $i <= 59; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <label for="seconds"> Seconds:</label>
                                    <select id="seconds" name="seconds" onchange="updateDuration()">
                                        <?php
                                        // Populate seconds dynamically
                                        for ($i = 0; $i <= 59; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <!-- <p id="duration">Selected Duration: 0 hours 0 minutes</p> -->
                                </div>
                            </div>

                            <button type="submit" name="submit" class="row btn btn-primary w-75">submit</button>
                        </form>
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













                <script>
                    function fillSubCategory() {
                        mid = document.getElementById("module_name").value;
                        window.location.replace("?mid=" + mid);
                    }

                    function updateDuration() {
                        var hours = document.getElementById('hours').value;
                        var minutes = document.getElementById('minutes').value;

                        // document.getElementById('duration').innerText = "Selected Duration: " + hours + " hours " + minutes + " minutes";
                    }
                </script>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function() {
                    el.classList.toggle("toggled");
                };
            </script>

        </div>
    </div>
</body>

</html>
<!-- add details in databse -->

<?php
if (isset($_POST["submit"])) {

    //    echo " <script>alert('$module_name');</script>";
    $data = $db->add_item();
    if ($data) {
        echo "<script type='text/JavaScript'>alert('Success');window.location = 'admin_dashboard.php';</script>";
    } else {
        header("Location: /add_item_admin.php?error=not_succcss");
    }
}

?>