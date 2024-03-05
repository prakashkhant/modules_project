<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The King : Eternal Monarch</title>
    <!-- link to css -->
    <link rel="stylesheet" href="css/sheet.css">
    <!-- fav icon -->
    <link rel="shortcut icon" href="images/television.png" type="image/x-icon">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- header -->
    
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
                    <li><a href="entertainment_home.php" class="liactive">Home</a></li>
                    <!--<li><a href="">About Me</a></li>
                    <li><a href="">Category<i class="fa-solid fa-sort-down"></i></a></li>
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
                <div class="toggle-switch">
                    <input type="checkbox" name="" class="l toggle-checkbox" id="dark-mode-toggle">
                    <label for="dark-mode-toggle" class="toggle-label"></label>
                </div>
                <button><a href="login_regs.php">Join Me !</a></button>
            </div>
        </nav>
    </header>
 
    <!-- play drama container -->
    <div class="play-container container">
        <!-- play image -->
        <img src="images/eternal.webp" alt="" class="play-img">
        <!-- play text -->
        <div class="play-text">
            <h2>The King : Eternal Monarch</h2>
            <!-- Ratings 
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>-->
            <!-- tags -->
            <div class="tags">
                <span>Fantasty</span>
                <span>Mystery</span>
                <span>Romance</span>
                <span>4K</span>
            </div>
            <!-- trailer Button 
            <a href="#" class="watch-btn">
                <i class='bx bx-play-circle'></i>
                <span>Watch the Trailer</span>
            </a>-->
        </div>
        <!-- play button -->
        <i class='bx bx-play-circle play-drama'></i>
        <!-- video container -->
        <div class="video-container">
            <!-- video-box -->
            <div class="video-box">
                <video id="myvideo" src="video/Theking.mp4" controls></video>
            <!-- close video icon -->
            <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
<!-- about -->
<div class="about-drama container">
    <h2>The King : Eternal Monarch</h2>
    <p>A modern-day Korean emperor passes through a mysterious portal and into a parallel world, where he encounters a feisty police detective.</p>
    <!-- Movie Cast -->
    <h2 class="cast-heading">Drama Cast</h2>
    <div class="cast">
        <div class="cast-box">
            <img src="images/lee.jfif" alt="" class="cast-img">
            <span class="cast-title">Lee Min-Ho</span>
        </div>
        <div class="cast-box">
            <img src="images/kim-.jpg" alt="" class="cast-img">
            <span class="cast-title">Kim Go-eun</span>
        </div>
        <div class="cast-box">
            <img src="images/woo-.jpg" alt="" class="cast-img">
            <span class="cast-title">Woo Do-hwan</span>
        </div>
        <div class="cast-box">
            <img src="images/young-.png" alt="" class="cast-img">
            <span class="cast-title">Kim Young-ok</span>
        </div>
        <div class="cast-box">
            <img src="images/kyung-.jpg" alt="" class="cast-img">
            <span class="cast-title">Kim Kyung-nam</span> 
        </div>
    </div>
</div>
<!-- download -->
<div class="watch">
    <h2 class="Watch-title">Watch Drama</h2>
    <div class="download-links">
        <a href="https://www2.newasiantv.pro/watch/the-king-the-eternal-monarch-episode-1.html">Watch</a>
    </div>
</div>
<!-- copyright  -->
<div class="copyright">
    <p>&#169; MyYaoiTV All Right Reserved</p>
</div>
 

<!-- link swiper files -->
<!-- <script src="swiper-bundle.min.js"></script> 
<script src="swiper-bundle.min.js"></script>
<!-- link to js -->
<script src="js/main.js"></script>
</body>
</html>