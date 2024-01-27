<?php       include './database/db.php';
                $db = new DB();
                $db->session_check();
                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>Nexushub </title>
    <meta name="title" content="Wren - Perosonal Blog Website">
    <meta name="description" content="This is a blog html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="images/logo.png" type="image/svg+xml">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="css/blog_style.css">

    <!-- 
    - preload images/blogs
  -->
    <link rel="preload" as="image" href="images/blogs/hero-banner.png">
    <link rel="preload" as="image" href="images/blogs/pattern-2.svg">
    <link rel="preload" as="image" href="images/blogs/pattern-3.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <div class="logo ">
                <div class="logoimg">
                    <img src="images/logo.png" alt="" srcset="">
                </div>
                <a href="index.php">
                    <h1 class="webname">NexusHub</h1>
                </a>
            </div>
            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="images/blogs/logo.svg" width="119" height="37" alt="Wren logo">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link hover-1" data-nav-toggler>Home</a>
                    </li>

                    <li>
                        <a href="#topics" class="navbar-link hover-1" data-nav-toggler>Topics</a>
                    </li>

                    <li>
                        <a href="#featured" class="navbar-link hover-1" data-nav-toggler>Featured Post</a>
                    </li>

                    <li>
                        <a href="#recent" class="navbar-link hover-1" data-nav-toggler>Recent Post</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link hover-1" data-nav-toggler>Contact</a>
                    </li>

                </ul>

                <div class="navbar-bottom">

                    <div class="profile-card">
                        <img src="images/blogs/author-1.png" width="48" height="48" alt="Steven" class="profile-banner">

                        <div>
                            <p class="card-title">Hello Steven !</p>

                            <p class="card-subtitle">
                                You have 3 new messages
                            </p>
                        </div>
                    </div>

                    <ul class="link-list">

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">Profile</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">Articles Saved</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">Add New Post</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">My Likes</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">Account Setting</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-bottom-link hover-1">Sign Out</a>
                        </li>

                    </ul>

                </div>

                <p class="copyright-text">
                    Copyright 2022 © Wren - Personal Blog Template.
                    Developed by codewithsadee
                </p>

            </nav>

            <a href="#" class="btn btn-primary">Subscribe</a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero" id="home" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                    </div>

                    <div class="hero-banner">

                        <!-- <img src="images/blogs/hero-banner.png" width="327" height="490" alt="Wren Clark" class="w-100"> -->

                        <img src="images/blogs/pattern-2.svg" width="27" height="26" alt="shape" class="shape shape-1">

                        <img src="images/blogs/pattern-3.svg" width="27" height="26" alt="shape" class="shape shape-2">

                    </div>

                    <img src="images/blogs/shadow-1.svg" width="500" height="800" alt="" class="hero-bg hero-bg-1">

                    <img src="images/blogs/shadow-2.svg" width="500" height="500" alt="" class="hero-bg hero-bg-2">

                </div>
            </section>





            <!-- 
        - #TOPICS
      -->

            <section class="topics" id="topics" aria-labelledby="topic-label">
                <div class="container">

                    <div class="card topic-card">

                        <div class="card-content">

                            <h2 class="headline headline-2 section-title card-title" id="topic-label">
                                Hot topics
                            </h2>

                            <p class="card-text">
                                Don't miss out on the latest blogs about lifestyle ,healths ,filmy , technology...
                            </p>

                            <div class="btn-group">
                                <button class="btn-icon" aria-label="previous" data-slider-prev>
                                    <ion-icon name="arrow-back" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="btn-icon" aria-label="next" data-slider-next>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>

                        </div>

                        <div class="slider" data-slider>
                            <ul class="slider-list" data-slider-container>

                                <li class="slider-item">
                                    <a href="blogs_cate_single.php" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="images/blogs/topic-1.png" width="507" height="618" loading="lazy" alt="Sport" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Sport</span>

                                            <p class="slider-subtitle">38 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="blogs_cate_single.php" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="images/blogs/topic-2.png" width="507" height="618" loading="lazy" alt="Travel" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Travel</span>

                                            <p class="slider-subtitle">63 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="blogs_cate_single.php" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="images/blogs/topic-3.png" width="507" height="618" loading="lazy" alt="Design" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Design</span>

                                            <p class="slider-subtitle">78 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="blogs_cate_single.php" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="images/blogs/topic-4.png" width="507" height="618" loading="lazy" alt="Movie" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Movie</span>

                                            <p class="slider-subtitle">125 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="blogs_cate_single.php" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="images/blogs/topic-5.png" width="507" height="618" loading="lazy" alt="Lifestyle" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Lifestyle</span>

                                            <p class="slider-subtitle">78 Articles</p>
                                        </div>

                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </section>





            <!-- 
        - #FEATURED POST
      -->

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <h2 class="headline headline-2 section-title">
                        <span class="span">Editor's picked</span>
                    </h2>

                    <p class="section-text">
                        Featured and highly rated articles
                    </p>

                    <ul class="feature-list">

                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="images/blogs/featured-1.png" width="1602" height="903" loading="lazy" alt="Self-observation is the first step of inner unfolding" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2">#Travel</a>

                                            <a href="#" class="span hover-2">#Lifestyle</a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">3 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="blogs_single.php" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read this -></a>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="images/blogs/featured-2.png" width="1602" height="903" loading="lazy" alt="Self-observation is the first step of inner unfolding" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2">#Design</a>

                                            <a href="#" class="span hover-2">#Movie</a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">6 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="blogs_single.php" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read this -></a>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="images/blogs/featured-3.png" width="1602" height="903" loading="lazy" alt="Self-observation is the first step of inner unfolding" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2">#Design</a>

                                            <a href="#" class="span hover-2">#Movie</a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">6 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="#" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read more</a>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="images/blogs/featured-4.png" width="1602" height="903" loading="lazy" alt="Self-observation is the first step of inner unfolding" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2">#Design</a>

                                            <a href="#" class="span hover-2">#Movie</a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">6 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="#" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read more</a>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="images/blogs/featured-5.png" width="1602" height="903" loading="lazy" alt="Self-observation is the first step of inner unfolding" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2">#Design</a>

                                            <a href="#" class="span hover-2">#Movie</a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">6 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="#" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read more</a>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>


                </div>

                <img src="images/blogs/shadow-3.svg" width="500" height="1500" loading="lazy" alt="" class="feature-bg">

            </section>





            <!-- 
        - #POPULAR TAGS
      -->


            <!-- 
        - #RECENT POST
      -->

            <section class="section recent-post" id="recent" aria-labelledby="recent-label">
                <div class="container">

                    <div class="post-main">

                        <h2 class="headline headline-2 section-title">
                            <span class="span">Recent posts</span>
                        </h2>

                        <p class="section-text">
                            Don't miss the latest trends
                        </p>

                        <ul class="grid-list">

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="images/blogs/recent-post-1.jpg" width="271" height="258" loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="images/blogs/recent-post-2.jpg" width="271" height="258" loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="images/blogs/recent-post-3.jpg" width="271" height="258" loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="images/blogs/recent-post-4.jpg" width="271" height="258" loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="images/blogs/recent-post-5.jpg" width="271" height="258" loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                        </ul>

                        <nav aria-label="pagination" class="pagination">

                            <a href="#" class="pagination-btn" aria-label="previous page">
                                <ion-icon name="arrow-back" aria-hidden="true"></ion-icon>
                            </a>

                            <a href="#" class="pagination-btn">1</a>
                            <a href="#" class="pagination-btn">2</a>
                            <a href="#" class="pagination-btn">3</a>
                            <a href="#" class="pagination-btn" aria-label="more page">...</a>

                            <a href="#" class="pagination-btn" aria-label="next page">
                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                            </a>

                        </nav>

                    </div>

                    <div class="post-aside grid-list">


                        <div class="card aside-card">

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">Last Comment</span>
                            </h3>

                            <ul class="comment-list">

                                <li>
                                    <div class="comment-card">

                                        <blockquote class="card-text">
                                            “ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner “
                                        </blockquote>

                                        <div class="profile-card">
                                            <figure class="profile-banner img-holder">
                                                <img src="images/blogs/author-6.png" width="32" height="32" loading="lazy" alt="Jane Cooper">
                                            </figure>

                                            <div>
                                                <p class="card-title">Jane Cooper</p>

                                                <time class="card-date" datetime="2022-04-15">15 April 2022</time>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="comment-card">

                                        <blockquote class="card-text">
                                            “ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner “
                                        </blockquote>

                                        <div class="profile-card">
                                            <figure class="profile-banner img-holder">
                                                <img src="images/blogs/author-7.png" width="32" height="32" loading="lazy" alt="Katen Doe">
                                            </figure>

                                            <div>
                                                <p class="card-title">Katen Doe</p>

                                                <time class="card-date" datetime="2022-04-15">15 April 2022</time>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="comment-card">

                                        <blockquote class="card-text">
                                            “ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard
                                            roadrunner “
                                        </blockquote>

                                        <div class="profile-card">
                                            <figure class="profile-banner img-holder">
                                                <img src="images/blogs/author-8.png" width="32" height="32" loading="lazy" alt="Barbara Cartland">
                                            </figure>

                                            <div>
                                                <p class="card-title">Barbara Cartland</p>

                                                <time class="card-date" datetime="2022-04-15">15 April 2022</time>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
-->
    <footer>
        <div class="container">

            <div class="card footer">

                <div class="section footer-top">

                    <div class="footer-brand">

                        <div class="logo ">
                            <div class="logoimg">
                                <img src="images/logo.png" alt="" srcset="">
                            </div>
                            <a href="index.php">
                                <h1 class="webname">NexusHub</h1>
                            </a>
                        </div>

                        <p class="footer-text">
                            This is blog website module that you see diffrent diffrent cate posts ,we hope you like this , and enjoy this when you read .
                        </p>

                        <p class="footer-list-title">Made by :</p>

                        <address class="footer-text address">
                            xt9develeopers <br>
                            Gujarat, India 
                        </address>

                    </div>

                    <div class="footer-list">

                        <p class="footer-list-title">Categories</p>

                        <ul>

                            <li>
                                <a href="#" class="footer-link hover-2">Action</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">Business</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">Adventure</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">Canada</a>
                            </li>

                           

                          

                            <li>
                                <a href="#" class="footer-link hover-2">Design</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">Breakfast</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">Dessert</a>
                            </li>

                        </ul>

                    </div>

                    <div class="footer-list">

                        <p class="footer-list-title">Newsletter</p>

                        <p class="footer-text">
                            Sign up to be first to receive the latest stories inspiring us, case studies, and intersting things.
                        </p>

                        <div class="input-wrapper">
                            <input type="text" name="name" placeholder="Your name" required class="input-field" autocomplete="off">

                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="input-wrapper">
                            <input type="email" name="email_address" placeholder="Emaill address" required class="input-field" autocomplete="off">

                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>


            </div>

        </div>
    </footer>




    <!-- 
    - #BACK TO TOP
  -->

 <?php include 'top_up.php'; ?>




    <!-- 
    - custom js link
  -->
    <!-- <script src="js/blog_script.js"></script> -->
    <script src="js/blog_srcipt.js"></script>
    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>