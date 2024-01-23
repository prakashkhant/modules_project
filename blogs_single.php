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
                        <a href="blogs_home.php" class="navbar-link hover-1" data-nav-toggler>Home</a>
                    </li>

                    <li>
                        <a href="blogs_home.php#topics" class="navbar-link hover-1" data-nav-toggler>Topics</a>
                    </li>

                    <li>
                        <a href="blogs_home.php#featured" class="navbar-link hover-1" data-nav-toggler>Featured Post</a>
                    </li>

                    <li>
                        <a href="blogs_home.php#recent" class="navbar-link hover-1" data-nav-toggler>Recent Post</a>
                    </li>

                    <li>
                        <a href="blogs_home.php#" class="navbar-link hover-1" data-nav-toggler>Contact</a>
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


                        <h1 class="headline headline-1 section-title">
                             <span class="span">this is title </span>
                        </h1>
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
        - #FEATURED POST
      -->

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <ul class="feature-list">

                        <li>
                            <div class="card feature-card">
                                <style>
                                    .feature-card {
                                        width: 1100px;
                                    }

                                    section {
                                        margin-top: 0px;
                                    }
                                    .so{
                                        color: darkblue;
                                        font-size: 24px;
                                        padding: 3px;
                                        border-radius: 10px;
                                    }
                                    .so:hover{
                                        transform: background translate3d(180deg);
                                    }
                                </style>
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
                                        <a href="#" class="card-title hover-2">
                                            Self-observation is the first step of inner unfolding
                                        </a>
                                    </h3>
                                    <?php $con=nl2br("Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. Large clouds often have functions distributed over multiple locations, each of which is a data center.
                                        Cloud computing is possible because of a technology called virtualization. Virtualization allows for the creation of a simulated, digital-only computer that behaves as if it were a physical computer with its own hardware. The technical term for such a computer is virtual machine. When properly implemented, virtual machines on the same host machine are sandboxed from one another, so they do not interact with each other at all, and the files and applications from one virtual machine are not visible to the other virtual machines even though they are on the same physical machine.

                                        Virtual machines also make more efficient use of the hardware hosting them. By running many virtual machines at once, one server can run many virtual and a data center becomes like a whole host of data centers, able to serve many organizations. Thus, cloud providers can offer the use of their servers to far more customers at once than they would be able to otherwise, and they can do so at a low cost.

                                        Even if individual servers go down, cloud servers in general should be always online and always available. Cloud vendors generally back up their services on multiple machines and across multiple regions.

                                        Users access cloud services either through a browser or through an app, connecting to the cloud over the Internet — that is, through many interconnected networks — regardless of what device they are using.");
                                    echo  $con; 
                                    ?>                                    
                                        
                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="images/blogs/author-1.png" width="48" height="48" loading="lazy" alt="Joseph" class="profile-banner">

                                            <div>
                                                <p class="card-title">Joseph</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="so btn">Comment</a>
                                        <a href="#" class="so btn">Share</a>
                                        <a href="#" class="so btn">Like</a>

                                    </div>

                                </div>

                            </div>
                        </li>


                    </ul>



                </div>

                <img src="images/blogs/shadow-3.svg" width="500" height="1500" loading="lazy" alt="" class="feature-bg">

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