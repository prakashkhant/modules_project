<?php
include './database/db.php';
$db = new DB();

$db->session_check();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus hub | Newzies</title>
    <link rel="stylesheet" href="css/news_home.css">
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="images/istockphoto-1420147711-640_adpp_is.mp4" type="video/mp4">
</video>
    <nav>
        <div class="main-nav container flex">
            <a href="#" onclick="reload()" class="company-logo">
                <img src="images/logo_name.png" alt="company logo">
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item" id="ipl" onclick="onNavItemClick('ipl')">IPL</li>
                    <li class="hover-link nav-item" id="business" onclick="onNavItemClick('business')">Business</li>
                    <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>
                    <li class="hover-link nav-item" id="gujarat" onclick="onNavItemClick('gujarat')">Gujarat</li>
                    <li class="hover-link nav-item" id="technology" onclick="onNavItemClick('technology')">Technology</li>
                </ul>
            </div>
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="Search Here">
                <button id="search-button" class="search-button">Search</button>
            </div>
        </div>
    </nav>

    <main>
        <div class="cards-container container flex" id="cards-container">
          
        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is The Title</h3>
                <h6 class="news-source" id="news-source">End Gadgets 26/01/2024</h6>
                <p class="news-desc" id="news-desc">These findings come at a crucial time when mental health concerns are on the rise globally. With stress and anxiety becoming pervasive in modern society, the study offers a promising and accessible solution for individuals seeking to cultivate mental resilience and emotional balance.</p>
            </div>
        </div>
    </template>
    
    <script src="js/news.js"></script>
</body>
</html>