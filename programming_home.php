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
            Hi, Welcome to <b>CodeHub</b>
            <!-- <br>Programming languages -->
          </h1>

          <p class="h3">
            Here ,you learn <abbr title="Accessibility">Coding languages</abbr>
            and other popular languages.
          </p>

          <div class="btn-group">
            <a href="#contact" class="btn btn-primary">About us</a>
            <!-- <a href="#" class="btn btn-secondary">About Me</a> -->
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="images/programming/pro_home.png" alt="home_img" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>





    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Remarkeble Topics</h2>

          <div class="blog-card-group">
          <?php
include './database/db.php';
$db = new DB();

$data = $db->populate_programming_lang_blogs();

foreach ($data as $d) {
  $lang_name=$db->find_programming_lang_name($d["cat_id"]);
 foreach ($lang_name as $l_name)
 {
  

  echo "
 
<div class='blog-card'>

<div class='blog-card-banner'>
<img src='images/programming/" . $d["photo"] . "' alt='Building microservices with Dropwizard, MongoDB & Docker'
width='250' class='blog-banner-img'>
</div>

<div class='blog-content-wrapper'>

<button class='blog-topic text-tiny'>".$l_name["cat_name"]."</button>

<h3>
<a href='pro_single.php?id=".$d["prog_id"]."&name=".$l_name["cat_name"]."' class='h3'>
" . $d["prog_title"] . "
</a>
</h3>

<p class='blog-text'>
" . $d["prog_desc"] . "
</p>

<div class='wrapper-flex'>

<div class='profile-wrapper'>
<img src='images/programming/author.png' alt='Julia Walker' width='50'>
</div>

<div class='wrapper'>
<a href='#' class='h4'>Julia Walker</a>

<p class='text-sm'>
<time datetime='2022-01-17'> " . $d["publish_date"] . "</time>
<span class='separator'></span>
<ion-icon name='time-outline'></ion-icon>
<time datetime='PT3M'>" . date("i:s", strtotime($d["time"])) . "</time>
</p>
</div>

</div>

</div>

</div>";
}
}
?>
            <!-- <div class="blog-card">

              <div class="blog-card-banner">
                <img src="images/programming/blog-2.png" alt="Fast web page loading on a $20 feature phone" width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Fast web page loading on a $20 feature phone</a></h3>

                <p class="blog-text">
                  Feature phones are affordable (under $20-25), low-end devices enabling 100s of millions of users in
                  developing countries
                  to leverage the web. Think of them as a light version of a smart phone.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="images/programming/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-12-10">Dec 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="images/programming/blog-3.png" alt="Accessibility Tips for Web Developers" width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Accessibility Tips for Web Developers</a></h3>

                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="images/programming/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="images/programming/blog-4.png" alt="Dynamically Securing Databases using Hashicorp Vault" width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Dynamically Securing Databases using Hashicorp Vault</a></h3>

                <p class="blog-text">
                  Nowadays, it's hard to profoundly talk about security in the IT industry, since it has to be
                  considered on so many
                  different levels: from securing code chunks, securing containers, up to securing complex
                  infrastructures and defining
                  strong authorization and authentication policies across the enterprise.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="images/programming/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div> -->

          </div>

        </div>
        <!--
          - ASIDE
        -->

        <div class="aside">

          <div class="topics">

            <h2 class="h2">Languages :</h2>

            <a href="pro_single.php" class="topic-btn">
              <div class="icon-box">
                <!-- <ion-icon name="server-outline"></ion-icon> -->
                <img src="images/programming/java.png" alt="">
              </div>

              <p>Java</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <img src="images/programming/python.png" alt="">
              </div>

              <p>Python</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <img src="images/programming/php.png" alt="">
              </div>

              <p>PHP</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <img src="images/programming/android.png" alt="">
              </div>

              <p>Android</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <img src="images/programming/js.png" alt="">
              </div>

              <p>Javascript</p>
            </a>


          </div>

          <div class="tags">

            <h2 class="h2">Tags</h2>

            <div class="wrapper">

              <button class="hashtag">#java</button>
              <button class="hashtag">#object</button>
              <button class="hashtag">#class</button>
              <button class="hashtag">#mobility</button>
              <button class="hashtag">#inclusion</button>
              <button class="hashtag">#webperf</button>
              <button class="hashtag">#optimize</button>
              <button class="hashtag">#performance</button>

            </div>

          </div>

          <div class="contact">

            <h2 class="h2">Let's Talk</h2>

            <div class="wrapper">

              <p>
                Do you have doubt say on social-link?
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

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