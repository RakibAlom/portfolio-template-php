<?php 
	include 'dashboard/rakib/include/dbcon.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width= device-width, initial-scale=1.0">
	<title>Rakib Alom</title>
	
	<!-- profile-icon -->
	<link rel="icon" href="img/icon.png" type="image/png">
	<!-- Twitter -->
    <meta name="twitter:site" content="Rakib Alom">
    <meta name="twitter:creator" content="Rakib Alom">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rakib Alom">
    <meta name="twitter:description" content="I am an expert web developer. I provide unique web design and development And I try to build the user interface website.">
    <meta name="twitter:image" content="img/icon.png">

    <!-- Facebook -->
    <meta property="og:title" content="Rakib Alom">
    <meta property="og:description" content="I am an expert web developer. I provide unique web design and development And I try to build the user interface website.">

    <meta property="og:image" content="img/icon.png">
    <meta property="og:image:secure_url" content="img/icon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <!-- Meta -->
    <meta name="description" content="I am an expert web developer. I provide unique web design and development And I try to build the user interface website.">
    <meta name="author" content="Rakib Alom">
	
	<!-- bootstap css -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<!-- font awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- magnific-pop -->
	<link rel="stylesheet" href="./vendor/magnific-popup/dist/magnific-popup.css">
	<!-- owl-carousel -->
	<link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
	<!-- custom css -->
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/responsive.css">

	<!-- sweetalert js -->
    <script src="./dashboard/rakib/js/sweetalert.min.js"></script>
</head>
<body>
	<!-- ============== Start Header Area ================ -->
	<header class="header-area">
		<div class="main-menu">
			<nav class="navbar navbar-expand-lg navbar-fixed">
				<div class="container">
					<a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="RakibAlom"></a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navMenu">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a href="#main" class="nav-link">Home</a></li>
							<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
							<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
							<li class="nav-item"><a href="#skill" class="nav-link">Skill</a></li>
							<li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
							<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- ============== End Header Area ================ -->

	<!-- ================ Start Main Area ============== -->
	<main class="site-main" id="main">

		<!-- ================ Start Banner Area ============== -->
		<section class="site-banner animate__animated animate__slideInRight a animate__delay-500ms">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 site-title">
						<h3 class="title-text animate__animated animate__backInDown animate__delay-1s">Hey</h3>
						<h1 class="title-text text-uppercase animate__animated animate__backInLeft animate__delay-2s">I am Rakib Alom</h1>
						<h4 class="title-text text-uppercase animate__animated animate__backInUp animate__delay-3s">Senior Web Developer</h4>
						<div class="site-buttons">
							<div class="d-flex flex-row flex-wrap animate__animated animate__flipInX animate__delay-4s">
								<a href="#contact" class="btn button primary-button text-uppercase mr-4">Hire me</a>
								<a href="pdf/rakibalom.pdf" class="btn button secondary-button text-uppercase">Get cv</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 banner-image animate__animated animate__bounceInRight animate__delay-2s">
						<img src="./img/banner/banner-image.png" class="img-fluid" alt="banner-image">
					</div>
				</div>
			</div>
		</section>
		<!-- ================ End Banner Area ============== -->

		<!-- ================ Start About Area ============== -->
		<section class="about-area animate__animated animate__fadeInLeft animate__delay-5s" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-12 about-image-section">
						<div class="about-image">
							<img src="./img/about-us.png" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 about-title pl-4">
						<h2 class="text-uppercase pt-5">
							<span>Let me </span>
							<span>Introduce</span>
							<span>Myself</span>
						</h2>
						<div class="paragraph py-4">
							<p class="para">
								My name is Rakib Alom. I am from Bangladesh and I study at Sylhet Technical School and College on Computer Science.
							</p>
							<p class="para">
								I am an expert web developer. I can build a website's design and development. I have good experience in back-end development. And I am also an expert on WordPress. I always try to build my work for the user interface.
							</p>
							<a href="pdf/rakibalom.pdf" class="btn button primary-button text-uppercase">Download CV</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================ End About Area ============== -->

		<!-- ================ Start Service Area ============== -->
		<section class="services-area pt-5" id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center services-title">
						<h1 class="text-uppercase title-text">Services Offer</h1>
						<p class="para">
							My service is Web Design, Web Development, Wordpress development and Customize, Search Engine Optimization. I also do customize and develop any website. 
						</p>
					</div>
				</div>

				<div class="services-list">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="services justify-align-center">
								<div class="services-img text-center py-4">
									<img src="./img/services/s1.png" alt="web development">
								</div>
								<div class="card-body text-center">
									<h5 class="text-uppercase font-roboto">Web Development</h5>
									<p class="card-text text-secondary">
										I provide my best feature when I develop any website. I always try to use the good and unique features of building a website.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="services">
								<div class="services-img text-center py-4">
									<img src="./img/services/s2.png" alt="wordpress">
								</div>
								<div class="card-body text-center ">
									<h5 class="text-uppercase font-roboto">Wordpress Development</h5>
									<p class="card-text text-secondary">
										I can build any type of WordPress website. I use the best WordPress plugin to develop. I also can do customize any WordPress site.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="services">
								<div class="services-img text-center py-4">
									<img src="./img/services/s3.png" alt="web design">
								</div>
								<div class="card-body text-center ">
									<h5 class="text-uppercase font-roboto">Web Design</h5>
									<p class="card-text text-secondary">
										I provide web design services and try to give unique and user interface design on the website. I provide smooth any standard web template.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="services">
								<div class="services-img text-center py-4">
									<img src="./img/services/s4.png" alt="website seo">
								</div>
								<div class="card-body text-center ">
									<h5 class="text-uppercase font-roboto">Website SEO</h5>
									<p class="card-text text-secondary">
										I provide SEO service to the process of growing the quality and quantity of website traffic by increasing the visibility of a website.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================ End Service Area ============== -->

		<!-- ================ Start Skill Area ============== -->
		<section class="skill-area" id="skill">
			<div class="container">
				<h2 class="text-uppercase pt-5 title-text text-center">
					My Skills
				</h2>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="row">
						<?php 
							$sql = "SELECT * FROM skills WHERE status = '1'";
							$run = mysqli_query($con,$sql);
							while($result = mysqli_fetch_assoc($run)) {
						 ?>
							<div class="col-lg-4 d-flex col-md-6 col-sm-6 col-6">
								<div class="single-brand">
									<img src="./dashboard/rakib/img/skill/<?php echo $result['logo']; ?>" alt="<?php echo $result['name']; ?>">
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="experience-area d-flex flex-column justify-align-center">
							<div class="d-flex flex-row years-area">
								<h2 class="p-3 years">3</h2>
								<h2>
									<span>Years</span>
									<span>Experience</span>
									<span>Working</span>
								</h2>
							</div>
							<div class="d-flex flex-row flex-wrap call-area">
								<span><i class="fa fa-phone fa-3x pr-4 pt-2"></i></span>
								<div class="call-now">
									<span class="text-uppercase h4 font-roboto py-2">Call Now</span>
									<span class="font-roboto py-2">(+88) 01623405027</span>
								</div>
							</div>
							<div class="bg-panel">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================ End Skill Area ============== -->

		<!-- ================ Start Project Area ============== -->
		<section class="project-area mt-5" id="portfolio">
			<div class="container">
				<div class="project-title">
					<h1 class="text-uppercase title-h1">Recently Done Project</h1>
					<h1 class="text-uppercase title-h1">Quality Work</h1>
				</div>
				<div class="btn-group">
					<button type="button" id="btn1" class="active">All</button>
					<button type="button" id="btn1" data-filter=".popular">Popular</button>
					<button type="button" id="btn1" data-filter=".development">Development</button>
					<button type="button" id="btn1" data-filter=".design">Design</button>
					<button type="button" id="btn1" data-filter=".graphics">Graphics</button>
				</div>
				<div class="row grid">
				<?php 
					$sql = "SELECT * FROM project WHERE status = '1' ORDER BY id desc";
					$run = mysqli_query($con,$sql);
					while($result = mysqli_fetch_assoc($run)) {
				 ?>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 element-item <?php echo $result['type']; ?>">
						<div class="our-project">
							<div class="img">
								<a class="img-popup-link" href="./dashboard/rakib/img/project/<?php echo $result['image']; ?>">
									<img class="img-fluid" src="./dashboard/rakib/img/project/<?php echo $result['image']; ?>" alt="<?php echo $result['name']; ?>">
									<div class="img-overlay">
										
									</div>
								</a>
							</div>
							<div class="title py-4">
								<h4 class="text-uppercase"><?php echo $result['name']; ?></h4>
								<span class="text-secondary">Element: <?php echo $result['used_element']; ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</section>
		<!-- ================ End Project Area ============== -->

		<!-- ================ Start Client Area ============== -->
		<section class="client-area pt-5">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="client-title">
							<h1 class="text-uppercase title-h1">Client Say About Me</h1>
							<p class="para">
								I have worked with many clients and they gave me good and excellent comments for my service.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container carousel py-lg-3">
				<div class="owl-carousel owl-theme">
				<?php 
					$sql = "SELECT * FROM clients WHERE status = '1' ORDER BY id desc";
					$run = mysqli_query($con,$sql);
					while($result = mysqli_fetch_assoc($run)) {
				 ?>
					<div class="client row">
						<div class="col-lg-4 col-md-4 client-img">
							<img src="./dashboard/rakib/img/client/<?php echo $result['image']; ?>" alt="<?php echo $result['name']; ?>" class="img-fluid">
						</div>
						<div class="col-lg-8 col-md-8 about-client">
							<h4 class="text-uppercase"><?php echo $result['name']; ?></h4>
							<p class="para">
								<?php echo $result['comment']; ?>
							</p>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</section>
		<!-- ================ End Client Area ============== -->

		<!-- ================ Start contact Me Area ============== -->
		<section class="contact-area" id="contact">
			<div class="container contact">
				<div class="row">
					<div class="col-lg-12 text-center contact-title">
						<h4 class="text-uppercase pb-4">Contact with Me</h4>
						<p class="contact-text">
							<i class="fa fa-envelope"></i> rakibalom17@gmail.com
						</p>
						<p class="contact-text">
							<i class="fa fa-mobile"></i> (+88) 01623-405027
						</p>
						<p class="contact-text">
							<i class="fa fa-map-marker"></i> Sylhet, Bangladesh
						</p>
					</div>
					<div class="col-lg-12 text-center contact-title">
						<h4 class="text-uppercase">Get update from anywhere</h4>
						<p class="para">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis libero culpa assumenda delectus, error fugiat.
						</p>
					</div>
				</div>

				<form action="" method="POST" class="container mt-4">
					<div class="row offset-md-1">
						<div class="col-md-8 text-input">
							<input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required="">
							<input type="hidden" name="status" value="1">
						</div>
						<div class="col-md-4">
							<div class="submit-button">
								<button type="submit" name="submit">Subscribe</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- ================ End contact Me Area ============== -->

	</main>
	<!-- ================ End Main Area ============== -->

	<!-- ================ Start Footer Area ============== -->
	<footer class="footer-area">
		<div class="container">
			<div class="site-logo text-center py-4">
				<a href="">
					<img src="./img/logo.png" alt="">
				</a>
			</div>
			<div class="social text-center">
				<h5 class="text-uppercase">Follow me</h5>
				<a href="https://www.facebook.com/wrarakib/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/RakibAlom7" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/rakibalom/" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com/RakibAlom" target="_blank"><i class="fa fa-github"></i></a>
				<a href="https://www.youtube.com/channel/UCvFBqWqWYnfTNyfvRHSUZyA" target="_blank"><i class="fa fa-youtube"></i></a>
			</div>
			<div class="copyrights text-center mt-4">
				<p class="para">
					Copyright &copy;2020 All rights reserved | Made with by 
					<a href="https://rakibalom.storialtech.com" style="color: var(--primary-color)">Rakib Alom</a>
				</p>
			</div>
		</div>
	</footer>
	<!-- ================ End Footer Area ============== -->



<!-- jquery js -->
<script src="./js/jquery.js"></script>
<!-- popper js -->
<script src="./js/popper.js"></script>
<!-- boostrap js -->
<script src="./js/bootstrap.js"></script>
<!-- isotope js -->
<script src="./vendor/isotope/isotope.min.js"></script>
<!-- magnific-popup js -->
<script src="./vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- owl-carousel js -->
<script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>
<!-- custom js -->
<script src="./js/custom.js"></script>

</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$status = $_POST['status'];

		include 'dashboard/rakib/include/dbcon.php';
		$sql = "SELECT * FROM subscribers WHERE email = '$email'";
		$run = mysqli_query($con,$sql);
		$email_check = mysqli_num_rows($run);
		if (!$email_check > 0) {
			$sql = "INSERT INTO subscribers (email,status) VALUES ('$email','$status')";
			$run = mysqli_query($con,$sql);

			if ($run) {
				?>
				<script>
					swal('Thank You','You just subscribed me!','success');
				</script>
				<?php
			}else{
				?>
				<script>
					swal('Failed','something went wrong!','error');
				</script>
				<?php
			}
		}else{
			?>
			<script>
				swal('Already Subscribed','Thank you for already subscribed!','error');
			</script>
			<?php
		}

	}

 ?>