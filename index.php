<?php 
	include("includes/config.php");
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	// session_destroy();

	if(isset($_SESSION['userLoggedIn'])) {
	$username = $_SESSION['userLoggedIn'];

}
else {
	header("Location: member.php");
}

	if(isset($_POST['logout'])){
		header("Location: logout.php");
	}


	$query = mysqli_query($con, "SELECT firstName FROM users WHERE userName='$username'");
	$data = mysqli_fetch_array($query);
	$firstName = $data['firstName'];

	$query1 = mysqli_query($con, "SELECT * FROM purchaseHistory WHERE name='$username' ORDER BY amount DESC LIMIT 1");
	$data1 = mysqli_fetch_array($query1);
	$dateLast = $data1['amount'];
	$quant = $data1['last'];

	
 ?>



 <!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cav Juice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Cav Juice, Inc.</a></h1>
								<hr />
								<p>Member <?php echo $username ?> Home Page</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Explore</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<!--<img src="images/logo.png" width="17px">-->
								<img src="images/logo.png" width="17px">
								<li><a href="index.php">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="subscribe.php">Subscribe</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li><a href="login.php">Log In</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Hey <?php echo $firstName ?>. Treat <strong>yourself</strong>!</h2>
						<p>

							<?php  echo "It's been Date: " . $dateLast . " since you ordered a package of " . $quant . "." ?>
							<a href="subscribe.php" style="font-weight: bold;">Time for another!</a>
						</p>

					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">

						<article>
							<a href="#" class="image featured"><img src="images/Juice1.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ctrl</a></h3>
							</header>
							<p>Cold pressed acai, blueberries and watermelon.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Juice2.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Reboot</a></h3>
							</header>
							<p>Seasonal kale, lemongrass and fuji apples.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Juice3.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Shift</a></h3>
							</header>
							<p>Exotic Lychee berries, dragonfruit and mango.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Juice4.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Space</a></h3>
							</header>
							<p>Forest grown blueberries, blackberries and grapes.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Juice5.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Eject</a></h3>
							</header>
							<p>Locally sorced lemongrass, pear and ginger root.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Juice6.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Refresh</a></h3>
							</header>
							<p>Florida orange, lemon, carrot and passionfruit.</p>
						</article>


						<!-- <article>
							<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Fermentum sagittis proin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Sed quis rhoncus placerat</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ultrices urna sit lobortis</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Varius magnis sollicitudin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>



						</article>  -->

					</div>
				</section>
				<!-- Banner -->
					<section id="banner">
						<header>

							<p>
								We are a local Charlottesville start-up specializing in artisanal juices. Our aim is to provide healthy, convenient products at reasonable prices.
							</p>
						</header>
					</section>
			<!-- Main -->
				<!-- <div class="wrapper style2">

					<article id="main" class="container special">
						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
						<header>
							<h2><a href="#">Sed massa imperdiet magnis</a></h2>
							<p>
								Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
								pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
							</p>
						</header>
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
							mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</p>
						<footer>
							<a href="#" class="button">Continue Reading</a>
						</footer>
					</article>

				</div> -->

			<!-- Features -->
				<!-- <div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Morbi ullamcorper et varius leo lacus</h2>
							<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
						</header>
						<div class="row">
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
					</section>

				</div> -->

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Thanks for the shipment @Cav Juice, Inc. !!!
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Sooo pleased with my Cav Juice order!! Thanks XOXO
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												I never leave the house w/out my juice...
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												If you havn't tried these juices, you're missing out!
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">New study links juice to athletic performance </a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">The benefits of multivitamins</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">Trening Start-ups: Cav Juice, Inc.</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">A juice a day keeps the doctor away</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row gtr-25">
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice1.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice2.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice3.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice4.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice5.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice6.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Follow us on Social Media!</h3>
										</header>
										<!-- <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p> -->
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
