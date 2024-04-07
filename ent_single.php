<?php include './database/db.php';
$db = new DB();
$db->session_check();
$c = $_GET["c"];
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus hub | Movie Details</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ent_single.css">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #f3f3f3;
        }

        .navbar-dark .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .movie-details {
            margin-top: 50px;
        }

        .movie-poster {
            width: 250px;
            height: auto;
        }

        .trailer-video {
            width: 100%;
        }
        .link{
            font-size: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo_name.png" alt="Hoster Bro Logo">
            </a>
            <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="entertainment_home.php">Home</a>
                    </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="entertainment_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <?php
            $pm = $db->populate_item_content($id);
            // print_r($pm);

            ?>
             <!-- <img src="images/entertaintment/" alt=""> -->
            <div class="col-md-8 mb-5">
                <?php 
               
                    foreach($pm as $pm){
                        echo "
                        <div class='movie-details'>
                        <div class='text-center'>
                            <img src='images/entertaintment/".$pm["photopath"]."' alt='Movie Poster' class='img-fluid movie-poster'>
                        </div>
                        <h2 class='mt-3'>Title : ".$pm["title"]." </h2>
                        <p class='text-muted'>Published by: ".$pm["publish_by"]."</p>
                        <p class='text-muted'>Rating: 4.5/5</p>
                        <p class='text-muted'>Publish Date: ".$pm["publish_date"]."</p>
                        <hr>
                        <h3>More Details</h3>
                        <p class='text-muted'>Description :".$pm["description"]."</p>
                        <p class='text-muted'>Tages :".$pm["keywords"]."</p>
                        <hr>
                        
                        <div class='link embed-responsive  embed-responsive-16by9 flex-wrap '>
                           <h3>Link for Dowload :    <a href=".$pm["videopath"]." class='btn btn-primary flex justify-content-end fs-3'>link </a>
                            </h3>
                        </div>
                    </div> 
                        ";
                    }
                ?>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>