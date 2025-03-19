<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medilab-wp-conversion
 */

?>

<?php  
	$dirPath = get_template_directory_uri() . "/assets/";
?>
<!-- <h2 class="bg-danger text-light ps-5 py-3">
   <?php //echo $dirPath; ?>
</h2> -->


<footer id="footer" class="footer light-background">

	

<div class="container footer-top">
  <div class="row gy-4">
	<div class="col-lg-4 col-md-6 footer-about">
		<?php
			if(is_active_sidebar("footer-left-sidebar")){
				dynamic_sidebar("footer-left-sidebar");
			}
		?>
	</div>

	<div class="col-lg-2 col-md-3 footer-links">
		<?php
			if(is_active_sidebar("footer-menu-1")){
				dynamic_sidebar("footer-menu-1");
			}
		?>
	</div>

	<div class="col-lg-2 col-md-3 footer-links">
		<?php
			if(is_active_sidebar("footer-menu-2")){
				dynamic_sidebar("footer-menu-2");
			}
		?>
	</div>

	<div class="col-lg-2 col-md-3 footer-links">
		<?php
			if(is_active_sidebar("footer-menu-3")){
				dynamic_sidebar("footer-menu-3");
			}
		?>
	</div>

	<div class="col-lg-2 col-md-3 footer-links">
		<?php
			if(is_active_sidebar("footer-menu-4")){
				dynamic_sidebar("footer-menu-4");
			}
		?>
	</div>

  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
