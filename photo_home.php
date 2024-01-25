<!DOCTYPE html>
<html lang="en">
<?php include 'database/db.php';
$db = new DB(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nexushub|Photo Gallery </title>
    <link rel="stylesheet" type="text/css" href="css/photo_home.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Travel</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <li><a href="#home">Home</a> </li>
            <li><a href="#category">Category</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a href="#hots">Hots</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>
    </header>

    <!--home section  -->

    <section class="home" id="home">
        <div class="home-text">
            <h1>Fuel Mind <br> Photos</h1>
            <p>Enthusiastically extend extensive Users service bofore <br> best breed convergence completely.</p>
            <a href="#" class="home-btn">Let's go now</a>

        </div>
    </section>

    <!-- category -->
    <section class="category" id="category">
        <div class="text">
            <h2> Start your Journey <br> with full of joy</h2>
        </div>

        <div class="row-items">
            <div class="category-box">
                <div class="category-img">
                    <img src="images/photo/cat1.png">
                </div>
                <h4>Nature Scienrio</h4>
                <p>150 views</p>
            </div>

            <div class="category-box">
                <div class="category-img">
                    <img src="images/photo/pop1.jpg">
                </div>
                <h4>Beautifull Places</h4>
                <p>150 views</p>
            </div>

            <div class="category-box">
                <div class="category-img">
                    <img src="images/photo/cat3.png">
                </div>
                <h4>Arts And Crafts</h4>
                <p>200 views</p>
            </div>

            <div class="category-box">
                <div class="category-img">
                    <img src="images/photo/cat4.png">
                </div>
                <h4>Animies World</h4>
                <p>250 views</p>
            </div>
        </div>
    </section>

    <!-- Popular section -->

    <section class="popular" id="popular">
        <div class="title">
            <h2>Our Latest <br>Combination</h2>
        </div>
        <div class="popular-content">
            <?php
            $pc = $db->fetch_items_by_module(5);
          
            // print_r($data);
            $count=0;
            foreach ($pc as $d) {
              $count+=1;
              if ($count==7){
                break;
              }
              echo "
           
            <div class='box'>
                <div class='thum'>
                    <img src='images/photo/".$d["photopath"]."'>

                </div>
                <div class='dest-content'>
                    <div class='location'>
                        <h4>test</h4>

                    </div>
                    <div class='stars'>
                        <a href='#'><i class='bx bxs-star'></i></a>
                        <a href='#'><i class='bx bxs-star'></i></a>
                        <a href='#'><i class='bx bxs-star'></i></a>
                        <a href='#'><i class='bx bxs-star'></i></a>
                        <a href='#'><i class='bx bxs-star'></i></a>

                    </div>
                </div>
            </div> "; } ?>
            <div class="box">
                <div class="thum">
                    <img src="images/photo/pop2.jpg">

                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>Dubai</h4>

                    </div>
                    <div class="stars">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="thum">
                    <img src="images/photo/pop3.jpg">

                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>Paris</h4>

                    </div>
                    <div class="stars">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- hots section -->
    <section class="hots" id="hots">
        <div class="title">
            <h2>Our Most Popular <br>Collection</h2>
        </div>

        <div class="hots-content">
            <div class="col-content">
                <img src="images/photo/hot1.jpg">
                <h5>Scienrio</h5>
                <p>Shizu</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>
            <div class="col-content">
                <img src="images/photo/hot2.jpg">
                <h5>Medalish</h5>
                <p>Shizu</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>
            <div class="col-content">
                <img src="images/photo/hot3.jpg">
                <h5>Colouring</h5>
                <p>Piku</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>
            <div class="col-content">
                <img src="images/photo/hot4.jpg">
                <h5>Love</h5>
                <p>Piku</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>

            <div class="col-content">
                <img src="images/photo/hot5.jpg">
                <h5>tree blosm</h5>
                <p>Shizu</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>

            <div class="col-content">
                <img src="images/photo/hot6.jpg">
                <h5>Moon Love</h5>
                <p>shizu</p>
                <div class="soical-content">
                    <a href=""><i class='bx bx-heart'></i></a>
                    <a href=""><i class='bx bx-share-alt'></i></a>
                    <a href=""><i class='bx bx-download'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter -->
    <section class="newsletter">
        <div class="news-text">
            <h2>Newsletter</h2>
            <p>Follow us for more creative,unique,and <br>beautifull Photos Gallery</p>
        </div>
        <div class="send">
            <form>
                <input type="email" placeholder="Write Your Email" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
    <!-- footer -->
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
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms And Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>

                    </ul>

                </div>
                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">Zasheshwar Bharuch</a></li>
                        <li><a href="#">Bharuch 392001</a></li>
                        <li><a href="#">9687019766</a></li>
                        <li><a href="#">saiyadshehnaz@gmail.com</a></li>

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
    <!-- link to js -->
    <script type="text/javascript" src="js/photo_home.js"></script>

</body>

</html>