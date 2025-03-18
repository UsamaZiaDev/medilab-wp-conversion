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

<header id="header" class="header sticky-top">

	<div class="branding d-flex align-items-center">
		<div class="container position-relative d-flex align-items-center justify-content-between">
			<?php 
				if(has_custom_logo()){
					the_custom_logo();
				}else{
					echo "<h1 class='sitename'>" . esc_html__( get_bloginfo("name") ) . "</h1>";
				}?>
				
				<div class="header-nav-wrapper">
					<?php if(has_nav_menu("menu-1")){
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'menu_id' => 'navmenu',
								'menu_class' => 'navmenu',
								'container' => 'nav',
								'container_class' => 'navmenu'
							));
						}
					?>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</div>
		</div>
	</div>

</header>
