<?php include './database/db.php';
$db = new DB();
$db->session_check();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nexushub | Photo Gallery </title>
	<link rel="stylesheet" type="text/css" href="css/photo_home.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<style>
		.hidden {
			position: absolute;
			visibility: hidden;
			opacity: 0;
		}

		input[type=checkbox]+label {
			color: #ccc;
			font-style: italic;
		}

		input[type=checkbox]:checked+label {
			color: #f00;
			font-style: normal;
		}

		.btn .btn-primary {
			background: hsl(229, 76%, 66%);

			padding: 0.6875rem 1.1875rem;
		}

		.btn .btn-primary:hover {
			background: hsl(216, 15%, 52%);
			color: hsl(286, 19%, 29%);
		}

		.btn {
			min-width: 7rem;
			font-size: 18px;
			border-radius: 100px;
			color: red !important;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<!-- header -->
	<header>
		<a href="index.php" class="logo">Nexus HUb</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">

			<li><a href="#home">Home</a> </li>
			<li><a href="#category">Category</a></li>
		
			<li><a href="#hots">Hots</a></li>
			<li><a href="about.php">About Us</a></li>

		</ul>
		<?php
		$db->login_dashboard();
		?>
	</header>

	<!--home section  -->

	<section class="home" id="home">
		<div class="home-text">
			<h1>Fuel Mind <br> Photos</h1>
			<p>Enthusiastically extend extensive Users service bofore <br> best breed convergence completely.</p>
			<!-- <a href="#" class="home-btn">Let's go now</a> -->

		</div>
	</section>

	<!-- category -->
	<section class="category" id="category">
		<div class="text">
			<h2> Start your Journey <br> with full of joy</h2>
		</div>

		<div class="row-items">
			
			<?php
				$pc=$db->fetch_category_list(5);
				// print_r($pc);
				$c=array(25,45,19,24,46);
				$i=0;
				foreach( $pc as $pc){
				echo " 
					<div class='category-box'>
						
							<div class='category-img'>
								<a href='photo_single.php?c=".$pc["cat_id"]."'><img src='images/".$pc["cat_photo"]."'></a>
							</div>
						
						<h4>".$pc["cat_name"]."</h4>
						<p>".$c[$i]." Photos</p>
					</div>		
					";
				$i++;}
			?>
			
		</div>
	</section>

	<!-- Popular section -->


	<!-- hots section -->
	<section class="hots" id="hots">
		<div class="title">
			<h2>Our Best <br>Collection</h2>
		</div>

		<div class="hots-content">
			<?php
			$p_images = $db->fetch_random_items_by_module(5);

			// print_r($data);
			$count = 0;
			foreach ($p_images as $pi) {
				$count += 1;
				echo "
              <div class='col-content'>
							<a href='photo_single.php?c=".$pi["category"]."'>
								<img src='images/photo/" . $pi["photopath"] . "'>
							</a>
							<h5>".ucfirst($pi["title"])."</h5>
							<p>".ucfirst($pi["publish_by"])."</p>
							<div class='soical-content'>
							<a href=''><i class='bx bx-heart'></i></a>
							<a href=''><i class='bx bx-down-arrow-alt' ></i></a>		  
							</div>
 							</div>
            ";
			} ?>

		</div>

	</section>
	<!-- Newsletter -->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Follow us for more creative,unique,and <br>beautifull Photos Gallery</p>
		</div>
		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>
	<!-- footer -->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms And Conditions</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Help</a></li>

					</ul>

				</div>
				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms And Conditions</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Help</a></li>

					</ul>

				</div>
				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">Zasheshwar Bharuch</a></li>
						<li><a href="#">Bharuch 392001</a></li>
						<li><a href="#">9687019766</a></li>
						<li><a href="#">saiyadshehnaz@gmail.com</a></li>

					</ul>

				</div>
				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook'></i></a>
						<a href="#"><i class='bx bxl-instagram'></i></a>
						<a href="#"><i class='bx bxl-twitter'></i></a>
						<a href="#"><i class='bx bxl-linkedin'></i></a>

					</div>
				</div>
			</div>
		</div>
		<div class="end-text">
			<p>Copyright @2024 All rights reserved | Made with by xt9 Developers</p>

		</div>
	</section>
	<!-- link to js -->
	<script type="text/javascript" src="js/photo_home.js"></script>

</body>

</html>