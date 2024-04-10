<?php include './database/db.php';
$db = new DB();
$db->session_check();
$cid = $_GET["c"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nexushub | Photo Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/photo_single.css">
    <script src="https://kit.fontawesome.com/e6a8e37cff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<style>
    .hidden {
        position: absolute;
        visibility: hidden;
        opacity: 0;
    }

    input[type=checkbox]+label {
        color: #ccc;
        font-style: italic;
    }

    input[type=checkbox]:checked+label {
        color: #f00;
        font-style: normal;
    }

    .btn .btn-primary {
        background: hsl(229, 76%, 66%);

        padding: 0.6875rem 1.1875rem;
    }

    .btn .btn-primary:hover {
        background: hsl(216, 15%, 52%);
        color: hsl(286, 19%, 29%);
    }

    .btn {
        min-width: 7rem;
        font-size: 18px;
        border-radius: 100px;
        color: red !important;
        text-decoration: none;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        opacity: 70%;
    }

    .collection h2 {
        margin: 100px;
    }

    body {
        background: url(images/photo/nature4.jpg);
    }
</style>

<body>
    <!-- <video autoplay muted loop id="myVideo">
  <source src="images/bg_live_2.mp4" type="video/mp4">
</video> -->
    <!-- header -->

    <header>
        <a href="index.php" class="logo">Nexus Hub</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <li><a href="photo_home.php">Home</a> </li>
            <li><a href="#collection">Collection</a></li>
            <!-- <li><a href="#popular">Popular</a></li>
            <li><a href="#hots">Hots</a></li>
            <li><a href="#contact">Contact</a></li> -->

        </ul>
        <?php
        $db->login_dashboard();
        ?>
    </header>

    <!--home section  -->


    <!-- hots section -->
    <section class="collection" id="collection">
        <div class="title">

            <h2>
                <span>
                    <?php
                    $cname = $db->find_category_name($cid);
                    foreach ($cname as $cn) {
                        echo ucfirst($cn["cat_name"]);
                    }
                    ?>
                    Collection
                </span>

            </h2>
        </div>

        <div class="collection-content" id="item-list">
            <?php
            $uid = 0;
            if (isset($_SESSION["id"])) {
                $uid = $_SESSION["id"];
            }
            $p_images = $db->fetch_items_list($cid);

            // print_r($data);
            $count = 0;
            foreach ($p_images as $pi) {
                $count += 1;
                $itemid = $pi["id"];
                echo "
              <div class='col-content' id='item" . $pi["id"] . "'>
  <img src='images/photo/" . $pi["photopath"] . "'>
  <h5>" . ucfirst($pi["title"]) . "</h5>
  <p>" . ucfirst($pi["publish_by"]) . "</p>
  <div class='soical-content'>";
                $sql = mysqli_query($db->conn, "SELECT flc_id FROM review WHERE item_id = $itemid AND uid = $uid AND liked = 1");
                if (mysqli_num_rows($sql) > 0) {
                    echo "<button class='likeBtn' id='like" . $itemid . "' onclick='unlikePost(" . $itemid . ", " . $uid . ")'>
							<i class='fa-solid fa-heart'></i>
						</button>";
                } else {
                    echo "<button class='likeBtn' id='like" . $itemid . "' onclick='likePost(" . $itemid . ", " . $uid . ")'>
							<i class='fa-regular fa-heart'></i>
						</button>";
                }
                $sql2 = mysqli_query($db->conn, "SELECT flc_id FROM review WHERE item_id = $itemid AND liked = 1");
                $likes = mysqli_num_rows($sql2);
                $filename= $pi["photopath"] ;
                echo "<span class='likes'>" . $likes . "</span>
 
                <button class='likeBtn' onclick='dwnF()'><i class='bx bx-down-arrow-alt'></i></button>


            

  </div>
</div>
            ";
            } ?>

        </div>
        <script>
            function dwnF(){
            window.location.href='download.php?image=images/photo/" '. images;}
        </script>
    </section>
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms And Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>

                    </ul>

                </div>
                <div class="list">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="">Terms And Conditions</a></li>
                        <li><a href="">Privacy</a></li>
                        <li><a href="">Help</a></li>

                    </ul>

                </div>
                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">Zasheshwar Bharuch</a></li>
                        <li><a href="#">Bharuch 392001</a></li>
                        <li><a href="#">9687019766</a></li>
                        <li><a href="#">xt9developers@gmail.com</a></li>

                    </ul>

                </div>
                <div class="list">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="end-text">
            <p>Copyright @2024 All rights reserved | Made with by xt9 Developers</p>

        </div>
    </section>
    <script type="text/javascript" src="js/photo_home.js"></script>

</body>

</html>