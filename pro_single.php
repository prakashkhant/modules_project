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
                        </b> Language.
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

                <div class="blog">



                    <h2 class="h2">

                        <?php
                        $topic_name = "What is Java?";
                        echo $topic_name;
                        ?>
                    </h2>

                    <div class="blog-card">

                        <div class="video-link" style="width: 700px;justify-content:center;">
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/mOEL8Q-2bSo?si=YbHvASAmTv8ZtZOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>



                    </div>

                    <div class="blog-card">
                        <div class="blog-card-banner content" style="width: 700px;">
                            <?php
                            $def = nl2br("Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.

                    Java was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.

                    Platform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.");
                            echo $def;


                            $content = nl2br("
                    According to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:

                    Desktop Applications such as acrobat reader, media player, antivirus, etc.
                    Web Applications such as irctc.co.in, javatpoint.com, etc.
                    Enterprise Applications such as banking applications.
                    Mobile
                    Embedded System
                    Smart Card
                    Robotics
                    Games, etc.
                    Types of Java Applications
                    There are mainly 4 types of applications that can be created using Java programming:

                    1) Standalone Application
                    Standalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.

                    2) Web Application
                    An application that runs on the server side and creates a dynamic page is called a web application. Currently, Servlet, JSP, Struts, Spring, Hibernate, JSF, etc. technologies are used for creating web applications in Java.

                    3) Enterprise Application
                    An application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, EJB is used for creating enterprise applications.

                    4) Mobile Application
                    An application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.

                    Java Platforms / Editions
                    There are 4 platforms or editions of Java:

                    1) Java SE (Java Standard Edition)
                    It is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, String, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.

                    2) Java EE (Java Enterprise Edition)
                    It is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, JPA, etc.

                    3) Java ME (Java Micro Edition)
                    It is a micro platform that is dedicated to mobile applications.

                    4) JavaFX
                    It is used to develop rich internet applications. It uses a lightweight user interface API.

                    Prerequisite
                    To learn Java, you must have the basic knowledge of C/C++ programming language.

                    Audience
                    Our Java programming tutorial is designed to help beginners and professionals.

                    Problem
                    We assure that you will not find any problem in this Java tutorial. However, if there is any mistake, please post the problem in the contact form.
               ");
                            echo $content;
                            ?>
                        </div>
                    </div>
                    <a href="#" class="btn load-more">Next topic</a>
                </div>















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



                    <div class="newsletter">

                        <h2 class="h2">Newsletter</h2>

                        <div class="wrapper">

                            <p>
                                Subscribe to our newsletter to be among the first to keep up with the latest updates.
                            </p>

                            <form action="#">
                                <input type="email" name="email" placeholder="Email Address" required>

                                <button type="submit" class="btn btn-primary">Subscribe</button>
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
                    <img src="images/logo_name.png" alt="website's Logo" width="150" height="80" class="logo-light">
                    <img src="images/logo_name.png" alt="website's Logo" width="150" height="80" class="logo-dark">
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