<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medilab-wp-conversion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">




<!-- ======================================================== -->
<!-- ======================================================== -->

<?php  
	$dirPath = get_template_directory_uri() . "/assets/";
?>

  <!-- Favicons -->
  <link href="<?php echo $dirPath . 'img/favicon.png' ?>" rel="icon">
  <link href="<?php echo $dirPath . 'img/apple-touch-icon.png' ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $dirPath . 'vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo $dirPath . 'vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo $dirPath . 'vendor/aos/aos.css'?>" rel="stylesheet">
  <link href="<?php echo $dirPath . 'vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet">
  <link href="<?php echo $dirPath . 'vendor/glightbox/css/glightbox.min.css' ?>" rel="stylesheet">
  <link href="<?php echo $dirPath . 'vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo $dirPath . 'css/main.css' ?> " rel="stylesheet">

<!-- ======================================================== -->
<!-- ======================================================== -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

<!-- <h2  class="bg-danger text-light ps-5 py-3" >
   <?php //echo $dirPath; ?>
</h2> -->



<header id="header" class="header sticky-top">

	<div class="topbar d-flex align-items-center">
	<div class="container d-flex justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
		<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
		<i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
		</div>
		<div class="social-links d-none d-md-flex align-items-center">
		<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
		<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
		<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
		<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
		</div>
	</div>
	</div><!-- End Top Bar -->

	<div class="branding d-flex align-items-center">

	<div class="container position-relative d-flex align-items-center justify-content-between">
		<a href="index.html" class="logo d-flex align-items-center me-auto">
		<!-- Uncomment the line below if you also wish to use an image logo -->
		<!-- <img src="assets/img/logo.png" alt=""> -->
		<h1 class="sitename">Medilab</h1>
		</a>

		<nav id="navmenu" class="navmenu">
		<ul>
			<li><a href="#hero" class="active">Home<br></a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#departments">Departments</a></li>
			<li><a href="#doctors">Doctors</a></li>
			<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
			<ul>
				<li><a href="#">Dropdown 1</a></li>
				<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
				<ul>
					<li><a href="#">Deep Dropdown 1</a></li>
					<li><a href="#">Deep Dropdown 2</a></li>
					<li><a href="#">Deep Dropdown 3</a></li>
					<li><a href="#">Deep Dropdown 4</a></li>
					<li><a href="#">Deep Dropdown 5</a></li>
				</ul>
				</li>
				<li><a href="#">Dropdown 2</a></li>
				<li><a href="#">Dropdown 3</a></li>
				<li><a href="#">Dropdown 4</a></li>
			</ul>
			</li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>

		<a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>

	</div>

	</div>

</header>
