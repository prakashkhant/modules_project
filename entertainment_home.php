<<<<<<< Updated upstream
<?php       include './database/db.php';
                $db = new DB();
                $db->session_check();
                ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>STREAMLAb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/entertainment_home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Owl Carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Owl Carousel css-->


    <!-- jquery css-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
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
                                <li><a href="account.html">Account</a></li>
                            </ul>
                        </nav>
                        <span class="fa fa-bars" onclick="menutoggle()"></span>

                        <div class="subscribe flex">
                            <i class="fas fa-search"></i>
                            <i id="palybtn" class="fas fa-user"></i>
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
                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
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

        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 50);
        })
    </script>



    <section class="popular mtop">
        <div class="container ">
            <div class="heading flex1">
                <h2>Most Popular</h2>
                <button>MORE VIDEO</button>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment/p1.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>My Generation</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment/p2.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Machine War</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment/s/entertainment/s/entertainment/s/entertainment/s/entertainment/s/entertainment/s/entertainment/s/entertainment/s/entertainment//p3.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Fight for Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment/p4.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>The Warrior Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p5.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Skull Of Myths </h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p6.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>The Jin's Friend</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p7.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Common Man's Idea</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular mtop">
        <div class="container ">
            <div class="heading flex1">
                <h2>Most Viewed</h2>
                <button>MORE VIDEO</button>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p7.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>My Generation</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p6.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Machine War</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p5.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Fight for Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p4.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>The Warrior Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p3.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Skull Of Myths </h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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






    <section class="new_realase top">
        <div class="container">
            <div class="owl-carousel owl-carousel2 owl-theme">
                <div class="items">
                    <div class="left">
                        <div class="img">
                            <img src="images/entertaintment//p4.jpg" alt="">
                        </div>
                        <div class="heading">
                            <h2> <span></span> NEW REALEASE</h2>
                            <h1>THE WARRIOR LIFE</h1>
                        </div>
                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="left">
                        <div class="img">
                            <img src="images/entertaintment//p5.jpg" alt="">
                        </div>
                        <div class="heading">
                            <h2> <span></span> NEW REALEASE</h2>
                            <h1>THE HORSE LADY </h1>
                        </div>
                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="left">
                        <div class="img">
                            <img src="images/entertaintment//p6.jpg" alt="">
                        </div>
                        <div class="heading">
                            <h2> <span></span> NEW REALEASE</h2>
                            <h1>ship of full moon </h1>
                        </div>
                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="left">
                        <div class="img">
                            <img src="images/entertaintment//p7.jpg" alt="">
                        </div>
                        <div class="heading">
                            <h2> <span></span> NEW REALEASE</h2>
                            <h1>THE WARRIOR LIFE</h1>
                        </div>
                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <a class="flex"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="left">
                        <div class="img">
                            <img src="images/entertaintment//p2.jpg" alt="">
                        </div>
                        <div class="heading">
                            <h2> <span></span> NEW REALEASE</h2>
                            <h1>THE WARRIOR LIFE</h1>
                        </div>
                        <div class="time flex">
                            <label>R</label>
                            <i class="fas fa-circle"></i>
                            <span>1hrs 50mins</span>
                            <i class="fas fa-circle"></i>
                            <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
                            <i class="fas fa-circle"></i>
                            <p>2021</p>
                            <i class="fas fa-circle"></i>
                            <button>Action</button>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="button flex">
                            <button class="btn">PLAY NOW</button>
                            <i id="palybtn" class="fas fa-play"></i>
                            <p>WATCH TRAILER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 20,
            dots: true,
            items: 1
        })
    </script>



    <section class="popular mtop">
        <div class="container ">
            <div class="heading flex1">
                <h2>Powerful Crime Thrillers</h2>
                <button>MORE VIDEO</button>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p7.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>My Generation</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p6.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Machine War</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p5.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Fight for Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p4.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>The Warrior Life</h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="imgBox">
                            <img src="images/entertaintment//p3.jpg" alt="">
                            <div class="icon">
                                <i class="far fa-heart"></i>
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>

                        <div class="content">
                            <i id="palybtn" class="fas fa-play"></i>
                        </div>
                        <div class="text">
                            <h3>Skull Of Myths </h3>
                            <div class="time flex">
                                <span>1hrs 50mins</span>
                                <i class="fas fa-circle"></i>
                                <a>Action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
        <p class="legal">Copyright (c) 2021 Copyright Holder All Rights Reserved | This template is made By <i
                class="fas fa-heart"></i> Dot Studio</p>
    </footer>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Yaoi TV</title>
    <!-- link to css -->
    <link rel="stylesheet" href="css/sheet.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- fav icon -->
    <link rel="shortcut icon" href="images/television.png" type="image/x-icon">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- header 
    <header>
        <!-- nav 
        <div class="nav container">
            <!-- logo 
            <a href="index.html" class="logo">
            </a>
            <!-- search box 
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search...">
                <i class='bx bx-search-alt-2' ></i>
            </div>
            <!-- user 
            <a href="#" class="user">
                <img src="images/woo-.jpg" alt="" class="user-img">
            </a>-->
            <!-- nav bar 
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <i class='bx bx-home-heart'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class='bx bx-camera-movie' ></i>
                    <span class="nav-link-title">Drama</span>
                </a>
                <a href="#dramas" class="nav-link">
                    <i class='bx bx-movie-play'></i>
                    <span class="nav-link-title">Movies</span>
                </a>
</div>-->
            
        </div>
    <!--</header>-->
    
    <header id="header">
        <nav class="container1 flex">
            <div class="logo flex">
                <div class="logoimg">
                    <img src="images/logo.png" alt="" srcset="">
                </div>
                <a href="/">
                    <h1 class="webname">NexusHub</h1>
                </a>
            </div>
            <div class="navlist flex">
                <ul class="flex">
                    <li><a href="index.php" class="liactive">Home</a></li>
                    <li><a href="">About Me</a></li>
                    <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Category</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">Movies</a>
                            <a href="#">Dramas</a>
                            <a href="#">Kids</a>
                        </div>
                    </div>
                    <!--<li><a href="">Category<i class="fa-solid fa-sort-down"></i></a></li>
                    <li><a href="">Blogs<i class="fa-solid fa-sort-down"></i></a></li>
                    <li><a href="">Entertaiments<i class="fa-solid fa-sort-down"></i></a></li>
                    <li><a href="programming_home.php">Computer Languages</a></li>-->

                </ul>
            </div>
            <div class="searchdarksub flex">
                <div class="searchbar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="searchclick">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search" id="">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <div class="tegsec">
                            <h3>Popular tags:</h3>
                            <div class="tags flex">
                                <a href="#">#Travel<span>,</span></a>
                                <a href="#">#Tech<span>,</span></a>
                                <a href="#">#Movie<span>,</span></a>
                                <a href="#">#Lifestyle<span>,</span></a>
                                <a href="#">#Sport</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="toggle-switch">
                    <input type="checkbox" name="" class="l toggle-checkbox" id="dark-mode-toggle">
                    <label for="dark-mode-toggle" class="toggle-label"></label>
                </div>-->
                <button><a href="login_regs.php">Join Me !</a></button>
            </div>
        </nav>
    </header>
 
    <!-- nav bar 
    <div class="sidebar">
        <div class="shortcut-links">
            <a href="index.html"><i class='bx bx-home'></i><p>Home</p></a>
            <a href=""><i class='bx bx-camera-movie'></i><p> Movies</p></a>
            <a href=""><i class='bx bx-movie-play'></i><p>Dramas</p></a>
            <a href=""><i class='bx bx-video'></i><p>Kids</p></a>
            <!--<hr>
        </div>
        
    </div>-->

    <!-- nav bar  end -->
    <!-- home -->
    <section class="home container" id="home">
        <!-- home image -->
        <img src="images/hwarangthepoet.jpg" alt="" class="home-img">
        <!-- home text -->
        <div class="home-text">
            <h1 class="home-title">Hwarang : The Poet Warrior Youth</h1>
            <p>December, 19 2016</p>
            <!--<a href="#" class="watch-btn">
                <i class='bx bx-play-circle'></i>
                <span>Watch the Trailer</span>
            </a>-->
        </div>
    </section>
    <!-- home end -->
    <!-- popular section start -->
    <section class="popular container" id="popular">
        <!-- heading -->
        <div class="heading">
            <h2 class="heading-title">Popular</h2>
            <!-- swiper buttons -->
            <div class="swiper-btn ">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- drama box 1 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/princeram.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">Ramayana : The Legend of Prince Rama </h2>
                            <span class="drama-type">Japanese Anime/Advanture</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 2 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/theuntamed.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">The Untamed</h2>
                            <span class="drama-type">Chinese drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 3 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/monarch.jpg" class="drama-box-img">
                        <div class="box-text">
                            <h2  class="drama-title" >The King : Eternal Monarch</h2>
                            <span class="drama-type">Fantasty Mystery Romance</span>
                            <a href="play-page.php" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 4 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/SemanticError.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">Semantic Error</h2>
                            <span class="drama-type">Korean Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 5 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/AllofUsAreDead.jpeg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">All of us are dead</h2>
                            <span class="drama-type">Korean drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 6 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/magic.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">The Sound of Magic</h2>
                            <span class="drama-type">Korean drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 7 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/thousandstars.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">A tale of Thousand Stars</h2>
                            <span class="drama-type">Thai Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              
              <!-- <div class="swiper-pagination"></div> -->
        </div>
            
    </section>
    <!-- popular section End -->
     <!-- popular section start -->
     <section class="popular container" id="popular">
        <!-- heading -->
        <div class="heading">
            <h2 class="heading-title">Popular</h2>
            <!-- swiper buttons -->
            <div class="swiper-btn ">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- drama box 1 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/princeram.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">Ramayana : The Legend of Prince Rama </h2>
                            <span class="drama-type">Japanese Anime/Advanture</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 2 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/theuntamed.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">The Untamed</h2>
                            <span class="drama-type">Chinese drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 3 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/monarch.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">The King : Eternal Monarch</h2>
                            <span class="drama-type">Fantasty Mystery Romance</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 4 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/SemanticError.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">Semantic Error</h2>
                            <span class="drama-type">Korean Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 5 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/AllofUsAreDead.jpeg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">All of us are dead</h2>
                            <span class="drama-type">Korean drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 6 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/magic.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">The Sound of Magic</h2>
                            <span class="drama-type">Korean drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- drama box 7 -->
                <div class="swiper-slide">
                    <div class="drama-box">
                        <img src="images/thousandstars.jpg" alt="" class="drama-box-img">
                        <div class="box-text">
                            <h2 class="drama-title">A tale of Thousand Stars</h2>
                            <span class="drama-type">Thai Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              
              <!-- <div class="swiper-pagination"></div> -->
        </div>
            
    </section>
    <!-- drama section end -->
    <!-- Next Page 
    <div class="next-page">
        <a href="#" class="next-btn">Next Page>></a>
    </div>-->
    <!-- copyright 
    <div class="copyright">
        <p>&#169; MyYaoiTV All Right Reserved</p>
    </div>-->
     

    <!-- link swiper js -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- link to js -->
    <script src="js/main.js"></script>
  
</body>
</html>
>>>>>>> Stashed changes
