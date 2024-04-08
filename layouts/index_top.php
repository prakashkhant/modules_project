<?php
session_start();
include './database/db.php';
$db = new DB();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusHub</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="short icon" href="images/logo.png" type="image/x-icon">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header id="header">
        <nav class="container1 flex">
            <div class="logo flex">
                <div class="logoimg">
                    <img src="images/logo.png" alt="" srcset="">
                </div>
                <a href="">
                    <h1 class="webname">NexusHub</h1>
                </a>
            </div>
            <div class="navlist flex">
                <ul class="flex">
                    <li><a href="index.php" class="liactive">Home</a></li>
                    <li><a href="news_home.php">News </a></li>
                    <li><a href="language_home.php">Languages</a></li>
                    <li><a href="blogs_home.php">Blogs</a></li>
                    <li><a href="entertainment_home.php">Entertaiments</a></li>
                    <li><a href="programming_home.php">Coading</a></li>
                    <li><a href="photo_home.php">Gallery</a></li>
                    <li><a href="about.php">About Me</a></li>

                </ul>
            </div>
            <div class="searchdarksub flex">
                <!-- <div class="searchbar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="searchclick">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search" id="">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <div class="tagsec">
                            <h3>Popular tags:</h3>
                            <div class="tegs flex">
                                <a href="#">#Travel<span>,</span></a>
                                <a href="#">#Tech<span>,</span></a>
                                <a href="#">#Movie<span>,</span></a>
                                <a href="#">#Lifestyle<span>,</span></a>
                                <a href="#">#Sport</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="toggle-switch">
                    <input type="checkbox" name="" class="l toggle-checkbox" id="dark-mode-toggle">
                    <label for="dark-mode-toggle" class="toggle-label"></label>
                </div>
                <?php
                $db->login_dashboard();
                ?>

            </div>
        </nav>
    </header>