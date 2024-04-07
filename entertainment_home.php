<?php include './database/db.php';
$db = new DB();
$db->session_check();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Nexus hub | Entertainments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/entertainment_home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Owl Carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Owl Carousel css-->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">


    <!-- jquery css-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- jquery css-->

</head>

<body>
    <section class="home">
        <div class="headerbg ">
            <header>
                <div class="container ">
                    <div class="navbar flex1">
                        <div class="logo">
                            <img src="images/entertaintment/logo.png" alt="">
                        </div>

                        <nav>
                            <ul id="menuitem">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="product.html">Movies</a></li>
                                <li><a href="index.html">Tv Shows</a></li>
                                <li><a href="contact.html">Video</a></li>

                            </ul>
                        </nav>
                        <span class="fa fa-bars" onclick="menutoggle()"></span>

                        <div class="subscribe flex">

                            <!-- DASHBOARD -->
                            <?php
                            $db->login_dashboard();
                            ?>
                        </div>
                    </div>
                </div>
            </header>

            <div class="home_content mtop">
                <div class="container">
                    <div class="left">
                        <h1>REBUNEKA THE DOLL</h1>

                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        var menuitem = document.getElementById("menuitem");
        menuitem.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitem.style.maxHeight == '0px') {
                menuitem.style.maxHeight = "200px"
            } else {
                menuitem.style.maxHeight = "0px"
            }
        }

        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 50);
        })
    </script>


    <section class="popular mtop">
        <div class="container ">
            <div class="heading flex1">
                <h2>Most Popular</h2>
                <!-- <button><a href="entertainment_category.php">More List</a></button> -->
            </div>
            <?php
            $bm = $db->fetch_items_by_module(1);
            // print_r($bm);
            ?>
            <div class="owl-carousel owl-theme">
                <!-- item php coede -->
                <?php
                $i = 0;
                foreach ($bm as $bm) {
                    if ($i == 11) {
                        break;
                    }
                    echo "
                        
                        <div class='item'>
                       
                            <div class='box'>
                            
                                <div class='imgBox'>
                                   <a href='ent_single.php?c=".$bm["category"]."&id=".$bm["id"]."'>  <img src='images/entertaintment/" . $bm["photopath"] . "' alt=''></a>
                                    <div class='icon'>
                                        <i class='far fa-heart'></i>
                                        <i class='fas fa-share-alt'></i>
                                        <i class='fas fa-plus'></i>
                                    </div>
                                </div>
        
                                <div class='content'>
                                    <i id='palybtn' class='fas fa-play'></i>
                                </div>
                                <div class='text'>
                                    <h3>" . $bm["title"] . "</h3>
                                    <div class='time flex'>
                                        <span>" . $bm["time"] . " </span>
                                        <i class='fas fa-circle'></i>
                                        <a>" . $bm["keywords"] . " </a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                           
                            ";
                }
                ?>
            </div>
    </section>




    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- Owl Carousel -->

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            responsive: {
                411: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>






  

    <script>
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 20,
            dots: true,
            items: 1
        })
    </script>


    <?php
    $cd = $db->fetch_category_list(1);


    foreach ($cd as $cd) {
        $cc = $db->fetch_items_list($cd["cat_id"]);
        $con = $db->count_items_list_category($cd["cat_id"]);
        foreach ($con as $con) {
            $cou = $con[0];
            break;
        }
        if ($cou <= 2) {
            break;
        }else{
    ?>
        <section class="popular mtop">
            <div class="container ">
                <div class="heading flex1">
                    <h2><?php echo $cd["cat_name"] ?></h2>
                    <button><a href="entertainment_category.php?c=<?php echo $cd["cat_id"];?>">More List</a></button>
                </div>

                <div class="owl-carousel owl-theme">

                    <?php
                   
                   
                        foreach ($cc as $cc) {



                            echo "
                           
                            <div class='item'>
                            <div class='box'>
                                <div class='imgBox'>
                                <a href='ent_single.php?c=".$bm["category"]."&id=".$cc["id"]."'> 
                                <img src='images/entertaintment/" . $cc["photopath"] . "' alt=''>
                                </a>
                                    <div class='icon'>
                                        <i class='far fa-heart'></i>
                                        <i class='fas fa-share-alt'></i>
                                        <i class='fas fa-plus'></i>
                                    </div>
                                </div>
        
                                <div class='content'>
                                    <i id='palybtn' class='fas fa-play'></i>
                                </div>
                                <div class='text'>
                                    <h3>" . $cc["title"] . "</h3>
                                    <div class='time flex'>
                                        <span>" . $cc["time"] . " </span>
                                        <i class='fas fa-circle'></i>
                                        <a>" . $cd["cat_name"] . " </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            ";
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php

    }
    ?>

    <!-- paxi mate ko lai aata hai-->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            responsive: {
                414: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>



    <footer>
        <div class="container mtop">
            <div class="box">
                <div class="logo">
                    <img src="images/entertaintment//logo.png">
                </div>
                <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
                <div class="icon">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-youtube-square"></i>
                </div>
            </div>

            <div class="box">
                <h2>Explore</h2>
                <div class="flex">
                    <ul>
                        <li>Home</li>
                        <li>Tv Shows</li>
                        <li>Actors</li>
                        <li>Celebrity</li>
                    </ul>
                    <ul class="ul">
                        <li>Movie</li>
                        <li>Video</li>
                        <li>Basketball</li>
                        <li>Coress</li>
                    </ul>
                </div>
            </div>

            <div class="box ">
                <h2>Company</h2>
                <div class="flex">
                    <ul>
                        <li>Company</li>
                        <li>Terms of Use</li>
                        <li>Contact us</li>
                        <li>Our Team</li>
                    </ul>
                    <ul class="ul">
                        <li>Privacy Policy</li>
                        <li>Helps Center</li>
                        <li>Subscribe</li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>

            <div class="box">
                <h2>Download App</h2>
                <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
                <div class="img flex1">
                    <img src="images/entertaintment//app1.png" alt="">
                    <img src="images/entertaintment//app2.png" alt="">
                </div>
            </div>
        </div>
        <p class="legal">Copyright (c) 2024 Copyright Holder All Rights Reserved | This module is made By <i class="fas fa-heart"></i> xt9developers</p>
    </footer>
</body>

</html>