<?php include './database/db.php';
$db = new DB();
$db->session_check();
$id = $_GET["id"];
$cid = $_GET["c"];
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
                        <a href="about.php" class="navbar-link hover-1" data-nav-toggler>About us</a>
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

            <?php
            $db->login_dashboard();
            ?>
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





            <!-- 
        - #FEATURED POST
      -->

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">
                    <style>
                        .card {
                            display: block;
                            flex-wrap: wrap;
                            gap: 30px;
                            width: 1100px;
                            justify-content: center;
                        }

                        .card-text {
                            font-size: 20px;
                            font-family: 'Times New Roman', Times, serif;
                        }

                        .card .hd {
                            font-size: 48px;
                            color: #709694;
                            text-align: center;
                            margin: 5px;
                        }

                        .card .img-holder {
                            width: 50%;
                            height: 30%;
                            margin-left: 10%;
                        }

                        .card .img-holder img {
                            width: 100%;
                            height: 100%;
                        }

                        section {
                            margin-top: 10px;
                            width: 100%;
                        }

                        .so {
                            color: darkblue;
                            font-size: 24px;
                            padding: 5px 10px;
                            border-radius: 10px;
                        }

                        .fontsize-2 {
                            font-size: 16px;
                            color: blue;
                            text-transform: capitalize;
                        }

                        .so:hover {
                            transform: background translate3d(180deg);
                        }

                        .card-content {
                            margin: 5% 10%;
                            /* margin-bottom: 0; */
                        }
                    </style>
                    <ul class="feature-list">
                        <?php

                        $cs = $db->populate_item_content($id);
                        // print_r($cs);
                        foreach ($cs as $cs) {
                            $time = date('i', strtotime($cs["time"]));
                            $publish = date('d M, Y', strtotime($cs["publish_date"]));
                            echo " 
                            <li>
                                <div class='card feature-card'>
                                <h3 class='headline headline-3 hd'>
                                <a href='' class='card-title hover-2 ' >
                                " . $cs["title"] . "
                                </a>
                            </h3>
                                <figure class='card-banner img-holder' style='--width: 771px; --height: 258px;'>
                                                    <img src='images/blogs/" . $cs["photopath"] . "' width='100%' height='100%' loading='lazy' alt='" . $cs["title"] . "' class='img-cover'>
                                </figure>

                                    <div class='card-content'>

                                        <div class='card-wrapper'>
                                            <div class='card-tag'>
                                                <a href='' class='span hover-2 fontsize-2'>Tages : " . $cs["keywords"] . "</a>

                                               
                                            </div>

                                            <div class='wrapper'>
                                                <ion-icon name='time-outline' aria-hidden='true' class='fontsize-2'></ion-icon>

                                                <span class='span fontsize-2'>" . $time . " mins read</span>
                                            </div>
                                        </div>

                                       
                                        
                                        <p class='card-text'>
                                             &emsp;&nbsp;" . nl2br($cs["content"]) . "
                                        </p>                                             
                                        <div class='card-wrapper'>

                                            <div class='profile-card'>
                                                <img src='images/blogs/author-1.png' width='48' height='48' loading='lazy' alt='Joseph' class='profile-banner'>

                                                <div>
                                                    <p class='card-title publish_by'>" . $cs["publish_by"] . "</p>

                                                    <p class='card-subtitle pd'>" .  $publish  . "</p>
                                                </div>
                                            </div>

                                            <button onclick='downloadPDF()' class='so btn'>Download PDF</button>
                                          
                                            <a href='#' class='so btn'>Like</a>

                                        </div>

                                    </div>

                                </div>
                            </li>
                            ";
                        }
                        
                        ?>
                    </ul>
                </div>

                <img src="images/blogs/shadow-3.svg" width="500" height="1500" loading="lazy" alt="" class="feature-bg">

            </section>

            <?php
                        // Retrieve blog content (you can get this from a database or any other source)
                        $blogTitle = "Sample Blog Title";
                        $readingTime = "5 minutes";
                        $imageUrl = "https://via.placeholder.com/400x300";
                        $blogContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget purus eu nisi suscipit feugiat. Donec sed malesuada mi. Nullam eget tristique justo, vel accumsan massa. Nam dictum feugiat dui non aliquam.";
                        $publisherName = "John Doe";
                        $publishDate = "March 4, 2024";

                        // Include the Dompdf library
                        require_once 'dompdf/autoload.inc.php';

                        // Use the Dompdf namespace
                        use Dompdf\Dompdf;
                        use Dompdf\Options;

                        // Initialize Dompdf options
                        $options = new Options();
                        $options->set('isHtml5ParserEnabled', true);
                        $options->set('isRemoteEnabled', true);

                        // Instantiate Dompdf
                        $dompdf = new Dompdf($options);

                        // HTML content for the PDF
                                            $html = "
                                    <h1>$blogTitle</h1>
                                    <p>Reading Time: $readingTime</p>
                                    <img src='$imageUrl' alt='Blog Image'>
                                    <p>$blogContent</p>
                                    <p>Published by: $publisherName</p>
                                    <p>Published on: $publishDate</p>
                                ";

                        // Load HTML content into Dompdf
                        $dompdf->loadHtml($html);

                        // Set paper size and orientation
                        $dompdf->setPaper('A4', 'portrait');

                        // Render the HTML as PDF
                        $dompdf->render();

                        // Output PDF as a download
                        $dompdf->stream('blog.pdf', array('Attachment' => 0));
            ?>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

</body>

</html>