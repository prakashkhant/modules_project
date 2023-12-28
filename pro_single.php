<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Hub</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="css/programming_style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
</head>

<body class="light-theme">

    <!--
    - #HEADER
  -->

    <header>

        <div class="container">

            <nav class="navbar">

                <a href="index.php">
                    <img src="images/logo_name.png" alt="website's logo" width="250" height="100" class="logo-light">
                    <img src="images/logo_name.png" alt="website's logo" width="250" height="100" class="logo-dark">
                </a>

                <div class="btn-group">

                    <button class="theme-btn theme-btn-mobile light">
                        <ion-icon name="moon" class="moon"></ion-icon>
                        <ion-icon name="sunny" class="sun"></ion-icon>
                    </button>

                    <button class="nav-menu-btn">
                        <ion-icon name="menu-outline"></ion-icon>
                    </button>

                </div>

                <div class="flex-wrapper">

                    <ul class="desktop-nav">

                        <li>
                            <a href="#" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">About Me</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">Contact</a>
                        </li>

                    </ul>

                    <button class="theme-btn theme-btn-desktop light">
                        <ion-icon name="moon" class="moon"></ion-icon>
                        <ion-icon name="sunny" class="sun"></ion-icon>
                    </button>

                </div>

                <div class="mobile-nav">

                    <button class="nav-close-btn">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <div class="wrapper">

                        <p class="h3 nav-title">Main Menu</p>

                        <ul>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">About Me</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                        </ul>

                    </div>

                    <div>

                        <p class="h3 nav-title">Topics</p>

                        <ul>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Java</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Python</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">PHP</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Android</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Javascript</a>
                            </li>
                        </ul>

                    </div>

                </div>

            </nav>

        </div>

    </header>





    <main>

        <!--
      - #HERO SECTION
    -->

        <div class="hero">

            <div class="container">

                <div class="left">

                    <h1 class="h1">
                        Here ,you learn about <b>

                            <?php
                            $lang_name = "Java";
                            echo $lang_name;
                            ?>
                        </b> Programming Language.
                        <!-- <br>Programming languages -->
                    </h1>

                    <p class="h3">
                        most <abbr title="Accessibility">
                            popular</abbr> and core topics
                    </p>

                    <div class="btn-group">
                        <a href="index.php" class="btn btn-primary">Go NexusHUb</a>
                        <a href="programming_home.php" class="btn btn-secondary">Back to Home</a>
                    </div>

                </div>

                <!-- <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="images/programming/lang_home.png" alt="home_img" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div> -->

            </div>

        </div>





        <div class="main">

            <div class="container">

                <!--
          - BLOG SECTION
        -->
                <?php include './database/db.php';
                $db = new DB();
                $id = $_GET["id"];
          
                $ldata = $db->populate_programming_lang_desc($id);
               
                foreach ($ldata as $ld) {
                    echo "             
                <div class='blog'>
                    <h2 class='h2'>
                       ".$ld['prog_title']."
                    </h2>

                    <div class='blog-card'>

                        <div class='video-link' style='width: 700px;justify-content:center;'>
                            <iframe width='100%' height='415' src=' ".$ld['prog_video']."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
                        
                            </div>

                    </div>

                    <div class='blog-card'>
                        <div class='blog-card-banner content' style='width: 700px;'>
                        ";
                        echo nl2br($ld['prog_desc'])."<br>";
                       $content= nl2br($ld['prog_content']);
                       echo $content;
                       echo "
                        </div>
                    </div>
                    <a href='#' class='btn load-more'>Next topic ►
                    </a>
                </div>

";
                            }
?>



                <!--
          - ASIDE
        -->

                <div class="aside">

                    <div class="topics">

                        <h2 class="h2">Topics :</h2>

                        <a href="#" class="topic-btn">


                            <p>What is Java ?</p>
                        </a>

                        <a href="#" class="topic-btn">

                            <p>Variables</p>
                        </a>

                        <a href="#" class="topic-btn">

                            <p>object and class</p>
                        </a>

                        <a href="#" class="topic-btn">

                            <p>pandas</p>
                        </a>

                        <a href="#" class="topic-btn">


                            <p>applet</p>
                        </a>


                    </div>


                    <div>
                        <hr width="100%">
                    </div>
                    <div class="newsletter">

                        <h2 class="h2">★ Quize ★</h2>

                        <div class="wrapper">

                            <p>
                                Want to increse your level and test the memeory ?
                            </p>

                            <form action="#">

                                <!-- test link------------------------------ -->
                                <a href="#">
                                    <button type="submit" class="btn btn-primary">Test</button>

                                </a>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>





    <!--
    - #FOOTER
  -->

    <footer>

        <div class="container">

            <div class="wrapper">

                <a href="#" class="footer-logo">
                    <img src="images/logo_name.png" alt="website's Logo" width="165" height="80" class="logo-light">
                    <img src="images/logo_name.png" alt="website's Logo" width="165" height="80" class="logo-dark">
                </a>

                <p class="footer-text">
                    Learn about Web accessibility, Web performance, and Database managementMore Languages.
                </p>

            </div>

            <div class="wrapper">

                <p class="footer-title">Quick Links</p>

                <ul>

                    <li>
                        <a href="#" class="footer-link">Advertise with us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About Us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contact Us</a>
                    </li>

                </ul>

            </div>

            <div class="wrapper">

                <p class="footer-title">Legal Stuff</p>

                <ul>

                    <li>
                        <a href="#" class="footer-link">Privacy Notice</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Cookie Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Terms Of Use</a>
                    </li>

                </ul>

            </div>

        </div>

        <p class="copyright">
            &copy; Copyright 2024 <a href="#">spjdeveloper</a>
        </p>

    </footer>





    <!--
    - custom js link
  -->
    <script src="js/pro_script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>