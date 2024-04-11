<?php       include './database/db.php';
                $db = new DB();
                $db->session_check();
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NexusHub | languages</title>

  <link rel="stylesheet" type="text/css" href="css/langsing.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500&display=swap"
    rel="stylesheet">
</head>

<body>

  <!--start header section-->

  <header>
    <a href="index.php" class="logo">
      <img src="images/logo_name_2.png">
    </a>
    <ul class="navbar">
      <li> <a href="language_home.php">Home</a></li>
      <li> <a href="#categories">Categories</a></li>
      <!-- <li> <a href="#languages">Languages</a></li> -->
      <li> <a href="#Refrence">Refrence</a></li>

    </ul>
    <div class="header-icons">
    <?php 
            $db->login_dashboard();
            ?>
      
      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>
  
  <!--start home section-->

  <section class="home" id="home">
    <div class="home-text">
      <!-- <h6>Best English Learning Platform</h6> -->
      <!-- <h1>Accesible for Good Knowledge</h1> -->
      <h1>Best <?php echo $_GET["cn"]; ?> Learning Platform</h1>
      <p>"Elevate Your Voice: Learn, Connect, Flourish!"</p>
      <!-- <div class="latter">
        <form>
          <input type="email" placeholder="write your email" required>
          <input type="submit" value="Let's Start" required>

        </form>
      </div> -->
    </div>
    
    <div class="home-img">
      <img src="images/language/languages.png">
    </div>
  </section>
  <!--start categories section-->
  <section class="categories" id="categories">
    <div class="center-text">
      <h5>◆ Start Learning ◆</h5>
      <h2>Step by Setp Learn </h2>

    </div>

    <div class="categories-content">
    <?php
            
                $cid=$_GET["c"];
                $ldata = $db->fetch_items_list($cid);
               
                foreach ($ldata as $ld) {
                    echo "
                    <div class='box'>
        <iframe src='".$ld["videopath"]."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
        <a href='".$ld["test_link"]."' target='_blank' class='btn btn-primary'>Test</a>
          </div>
          ";} ?>
       
        <!-- <iframe  class="box" src="https://www.youtube.com/embed/ZIw6qG4BDZg?si=dLTr7QDdqiZoI7Ck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

    
     
   
    </div>

  
    
  </section>
  <!--start container section-->
  <div class="center-text">
    <h2>◆ Helpful Books ◆</h2>
    
    </div>     
  <section class="container">
 
    <div class="container-box">
     <a href="https://www.amazon.in/Fast-Track-Spanish-Learning-Lessons/dp/1989777201" target="_blank" rel="noopener noreferrer">
          <img src="images/language/book-spinsh.jpg">

     </a>
        
     
    </div>

    <div class="container-box">
    <a href="https://www.amazon.in/English-Grammar-Use-Book-Answers/dp/0521189063"  target="_blank" rel="noopener noreferrer">
       <img src="images/language/book-english-grammer.jpg">
    </a>
     
     
      
    </div>

    <div class="container-box">
      <a href="https://www.amazon.in/Dictionary-Languages-Definitive-Reference-More/dp/0231115687"  target="_blank" rel="noopener noreferrer">
           <img src="images/language/book-english-usage.jpg">
      </a>
       
     
     
    </div>
  </section>




   <!--start cources section-->

   <section class="cources" id="cources">
    <div class="center-text">
      <h5>★ Premium Courses ★</h5>
      <h2>Explore Popular Cources</h2>
    </div>

    <div class="cources-content">
      <div class="row">
        <a href="https://www.vocabulary.com/"  target="_blank">
          <img src="images/language/course-vacb.jpg" width="400px" height="400px">
          <div class="cources-text">
            <h5>Advance</h5>
            <h3>Complete Langauge Vacabulary</h3>
            <div class="rating">
              <div class="star">
                <?php
                function rating($n)
                {
                  for ($i = 1; $i <= $n; $i++) {
                    echo '<a href="#">' . ' ' . "<i class='bx bxs-star'></i>" . '</a>';
                  }
                }

                rating(5);
                ?>

              </div>
              <div class="rating">
                <p>238M Reviews</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="row">
        <a href="https://www.ieltspass.com/courses/online-ielts-course-preparation-training"  target="_blank">
          <img src="images/language/course-ielts.png">
          <div class="cources-text">
            <h5>Advance</h5>
            <h3>Complete ILETS Learning</h3>
            <div class="rating">
              <div class="star">
                <?php

                rating(4);
                ?>
              </div>
              <div class="rating">
                <p>207M Reviews</p>
              </div>
            </div>
          </div>
        </a>
      </div>



      <div class="row">
        <a href="https://www.englishgrammar101.com/"  target="_blank">
        <img src="images/language/cource-grammer.jpg">
        <div class="cources-text">
          <h5>Advance</h5>
          <h3>Complete Langauge Grammer</h3>
          <div class="rating">
            <div class="star">
              <?php

              rating(3);
              ?>
            </div>
            <div class="rating">
              <p>105M Reviews</p>
            </div>
          </div>
        </div>
        </a>
      </div>

      <div class="row">
        <a href="https://www.studying-in-germany.org/learn-german/" target="_blank">
        <img src="images/language/course-german.jpg">
        <div class="cources-text">
          <h5>Advance</h5>
          <h3>Complate German Language</h3>
          <div class="rating">
            <div class="star">
              <?php

              rating(5);
              ?>
            </div>
            <div class="review">
              <p>145M Reviews</p>
            </div>
          </div>

        </div>
        </a>
      </div>

    </div>

    <!-- <div class="main-btn">
      <a href="https://www.duolingo.com/"  target="_blank" class="btn">Learn More</a>
    </div> -->

  </section>

   <!--start cta section-->

   <section class="cta" id="refernce">
    <div class="center-text">
     
      <h2>Top 4 Universities </h2>
    </div>
    <div class="cta-content">

      <div class="cta-img">
        <img src="images/language/uns-canada.png">
      </div>

      <div class="cta-img">
        <img src="images/language/uns-lang2.png">
      </div>

      <div class="cta-img">
        <img src="images/language/uns-khwaja.png">
      </div>

      <div class="cta-img">
        <img src="images/language/uns-london.png">
      </div>

    </div>
  </section>

    <!--start about section-->
    <section class="about" id="about">
      <div class="about-img">
        <img src="images/language/about.png" width="400px" height="400px">
      </div>

      <div class="about-text">
        <h2>Want To Learn more About Us? Let's Go join us</h2>
        <p>we provide best environment for making your future bright gives Knowledge and confidence for your grouwth.</p>
        <h4>Best Cources</h4>
        <!-- <a href="#" class="btn">Read More</a> -->
      </div>
    </section>

  <script type="text/javascript" src="js/language.js"></script>
</body>

</html>