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
