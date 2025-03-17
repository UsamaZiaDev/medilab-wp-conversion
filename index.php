<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medilab-wp-conversion
 */

get_header();
 
	$dirPath = get_template_directory_uri() . "/assets/";

	$heroData = get_field("hero_section");
	$heroCardsData = $heroData["icons_cards_group"];

	$aboutData = get_field("about_section");
	$services_section = get_field("services_section");
	$appointmentSection = get_field("appointment_section");
	$departmentsSection = get_field("departments_section");
	$doctorsSection = get_field("doctors_section");
	$faqSection = get_field("faq_section");
	$testimonialsSection = get_field("testimonials_section");
	$gallerySection = get_field("gallery_section");
	$contactSection = get_field("contact_section");

?>

<main class="main">

	<!-- Hero Section -->
	<section id="hero" class=" hero section light-background">
	<img src="<?php echo $heroData["section_background_image"]; ?>" alt="" data-aos="fade-in">
	<div class="container position-relative">
		<div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
		<h2><?php echo $heroData['title']; ?></h2>
		<p><?php echo $heroData['sub_title']; ?></p>
		</div><!-- End Welcome -->
		<div class="content row gy-4">
		<div class="col-lg-4 d-flex align-items-stretch">
			<div class="why-box" data-aos="zoom-out" data-aos-delay="200">
			<h3> <?php echo $heroData["left_side_content_card"]["title"] ?> </h3>
			<p> <?php echo $heroData["left_side_content_card"]["short_description"] ?> </p>
			<div class="text-center">
				<a href="<?php echo $heroData["left_side_content_card"]["button"]["url"] ?>" class="more-btn">
					<span>
						<?php echo $heroData["left_side_content_card"]["button"]["title"] ?> 
					</span> 
					<i class="bi bi-chevron-right"></i>
				</a>
			</div>
			</div>
		</div><!-- End Why Box -->

		<div class="col-lg-8 d-flex align-items-stretch">
			<div class="d-flex flex-column justify-content-center">
			<div class="row gy-4">
					<?php 
						foreach( $heroCardsData as $data){
								set_query_var("hero_card_data", $data);
								get_template_part("templates-part/hero-icon-card");
						}
					?>
			</div>
			</div>
		</div>
		</div><!-- End  Content-->
	</div>
	</section>
	<!-- /Hero Section -->

	<!-- About Section -->
	<section id="about" class=" about section">

	<div class="container">

		<div class="row gy-4 gx-5">

		<div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
			<img src="<?php echo $aboutData["video_thumbnail"]; ?>" class="img-fluid" alt="">
			<a href="<?php echo $aboutData["video_url"]; ?>" class="glightbox pulsating-play-btn"></a>
		</div>

		<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
			<h3> <?php echo $aboutData["title"]; ?> </h3>
			<p>  <?php echo $aboutData["sub_title"]; ?> </p>

			<ul>
				<?php 
					foreach( $aboutData["icon_list_group"] as $data){
						set_query_var("icon_list_data", $data);
						get_template_part( "/templates-part/icon-list");
					}	
				?>
			</ul>
		</div>

		</div>

	</div>

	</section>
	<!-- /About Section -->
	
	<!-- Stats Section -->
	<section id="stats" class=" stats section light-background">
		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<div class="row gy-4">
				<?php
					foreach( $aboutData["icon_cards_group"] as $data){
						set_query_var("icon_cards_data", $data);
						get_template_part( "/templates-part/top-icon-card");
					}
				?>
			</div>
		</div>
	</section>
	<!-- /Stats Section -->

	<!-- Services Section -->
	<section id="services" class=" services section">
		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $services_section["title"] ?></h2>
			<p><?php echo $services_section["sub_title"] ?></p>
		</div><!-- End Section Title -->

		<div class="container">
			<div class="row gy-4">
				<?php
					foreach( $services_section["icon_cards_group"] as $data){
						set_query_var("icon_card_data", $data);
						get_template_part("/templates-part/icon-card");
					}
				?>
			</div>
		</div>
	</section>
	<!-- /Services Section -->

	<!-- Appointment Section -->
	<section id="appointment" class=" appointment section">
		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $appointmentSection["title"] ?></h2>
			<p><?php echo $appointmentSection["sub_title"] ?></p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<?php  
				echo do_shortcode( $appointmentSection["add_form_short_code"]);
			?>
		</div>
	</section>
	<!-- /Appointment Section -->

	<!-- Departments Section -->
	<section id="departments" class=" departments section">
		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2> <?php echo $departmentsSection["title"] ?> </h2>
			<p> <?php echo $departmentsSection["sub_title"] ?> </p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row">

			<div class="col-lg-3">
				<ul class="nav nav-tabs flex-column">
					<?php 
						$firstTab = true;
						foreach($departmentsSection["department_tabs_group"] as $key => $data) { ?>
							<li class="nav-item">
								<a class="nav-link <?php echo $firstTab ? ' active show ' : '' ?> "
								data-bs-toggle="tab" 
								href="#<?php echo strtolower(str_replace(' ', '_', $data["tab_name"])) ?>"
								role="tab">
									<?php echo $data["tab_name"] ?>
								</a>
							</li>
					<?php 
						$firstTab = false;
					} ?>
				</ul>
			</div>

			<div class="col-lg-9 mt-4 mt-lg-0">
				<div class="tab-content">
					<?php 
						$firstContent = true;
						foreach($departmentsSection["department_tabs_group"] as $key => $data) { 
					?>
						<div class="tab-pane fade <?php echo $firstContent ? ' active show ' : '' ?> " 
							id="<?php echo strtolower(str_replace(' ', '_', $data["tab_name"])) ?>"
							role="tabpanel">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3><?php echo $data["title"] ?></h3>
									<p class="fst-italic">
										<?php echo $data["description"] ?>
									</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="<?php echo $data["image"] ?>" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					<?php 
						$firstContent = false;
					} ?>
				</div> <!-- tab-content -->
			</div>
		</div>
	</section>
	<!-- /Departments Section -->

	<!-- Doctors Section -->
	<section id="doctors" class=" doctors section">
		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $doctorsSection["title"]; ?></h2>
			<p><?php echo $doctorsSection["sub_title"]; ?></p>
		</div><!-- End Section Title -->

		<div class="container">
			<div class="row gy-4">
				<?php 
					foreach(   $doctorsSection["doctor_cards_group"] as $data ){
						set_query_var("doctor_card_data", $data);
						get_template_part("templates-part/doctor-cards");
					}
				?>
			</div>
		</div>
	</section>
	<!-- /Doctors Section -->

	<!-- Faq Section -->
	<section id="faq" class=" faq section light-background">
		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $faqSection["title"]; ?></h2>
			<p><?php echo $faqSection["title"]; ?></p>
		</div><!-- End Section Title -->

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

					<div class="faq-container">
						<?php
							foreach($faqSection["faq_group"] as $data){
								set_query_var("faq_card_data", $data);
								get_template_part("templates-part/faq-card");
							}
						?>
					</div>
				</div><!-- End Faq Column-->
			</div>
		</div>
	</section>
	<!-- /Faq Section -->

	<!-- Testimonials Section -->
	<section id="testimonials" class=" testimonials section">

	<div class="container">

		<div class="row align-items-center">

			<div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
				<h3><?php echo $testimonialsSection["title"]; ?></h3>
				<p><?php echo $testimonialsSection["sub_title"]; ?></p>
			</div>

		<div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

			<div class="swiper init-swiper">
			<script type="application/json" class="swiper-config">
				{
				"loop": true,
				"speed": 600,
				"autoplay": {
					"delay": 5000
				},
				"slidesPerView": "auto",
				"pagination": {
					"el": ".swiper-pagination",
					"type": "bullets",
					"clickable": true
				}
				}
			</script>
			<div class="swiper-wrapper">
				<?php 
					foreach($testimonialsSection["testimonial_cards_group"] as $data){
						set_query_var("testimonial_card_data", $data);
						get_template_part("templates-part/testimonials-card");
					}
				?>
			</div>
			<div class="swiper-pagination"></div>
			</div>

		</div>

		</div>

	</div>

	</section>
	<!-- /Testimonials Section -->

	<!-- Gallery Section -->
	<section id="gallery" class=" gallery section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $gallerySection["title"]; ?></h2>
			<p><?php echo $gallerySection["sub_title"]; ?></p>
		</div><!-- End Section Title -->

		<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
			<div class="row g-0">
				<?php 
					foreach($gallerySection["gallery_group"] as $data){ ?>
						<div class="col-lg-3 col-md-4">
							<div class="gallery-item">
							<a href="<?php echo $data ?>" class="glightbox" data-gallery="images-gallery">
								<img src="<?php echo $data ?>" alt="" class="img-fluid">
							</a>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>

	</section>
	<!-- /Gallery Section -->

	<!-- Contact Section -->
	<section id="contact" class="contact section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2><?php echo $contactSection["title"]; ?></h2>
			<p> <?php echo $contactSection["sub_title"]; ?> </p>
		</div><!-- End Section Title -->

		<div class="mb-5" data-aos="fade-up" data-aos-delay="200">
			<?php echo $contactSection["embed_google_map"]; ?> 
		</div><!-- End Google Maps -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<div class="row gy-4">
				<div class="col-lg-4">
					<?php foreach($contactSection["contect_info_group"] as $data){ ?>
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
							<i class="<?php echo $data['icon_name']; ?> bi flex-shrink-0"></i>
							<div>
								<h3> <?php echo $data["title"]; ?> </h3>
								<p>  <?php echo $data["description"]; ?>  </p>
							</div>
				</div>
					<?php	} ?>
			</div>

			<div class="col-lg-8">
				<?php  
					echo do_shortcode( $contactSection["contact_form_short_code"]);
				?>
			</div><!-- End Contact Form -->
		</div>

	</section>
	<!-- /Contact Section -->

</main>


<?php
get_footer();
