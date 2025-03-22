
<?php
/**
 * medilab-wp-conversion Theme Customizer
 *
 * @package medilab-wp-conversion
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

   function uzml_medilab_customize_register( $wp_customize ){
		// Define Sections
		$sections = [
			"uzml_custom_colors_scheme_section" =>  "Global Colors Scheme", 
			"uzml_menu_custom_section" => "Menu Colors Scheme",
		];
			
		// Add Custom Panel
		$wp_customize->add_panel( "uzml_custom_panel", [
			"title" => "Medilab Theme Panel",
			"description" => "<p>Customize the Medilab theme</p>",
			"priority" => 10,
		]);

		// Add Sections
		foreach( $sections as $sections_id => $label ){
			$wp_customize->add_section(  $sections_id,[
				"title" => $label,
				"description" => "<p>Customize the Medilab theme</p>",
				"panel" => "uzml_custom_panel",
			]);
		}

		// Define Color Settings
		$color_settings = array(
			"uzml_body_background_color" => ["#fff", "Body Background Color", "uzml_custom_colors_scheme_section"],
			"uzml_brand_text_color" => ["#1977cc", "Brand Text Color", "uzml_custom_colors_scheme_section"],
			"uzml_primary_color" => ["#1977cc", "Primary Color", "uzml_custom_colors_scheme_section"],
			"uzml_text_color" => ["#444444", "Text Color", "uzml_custom_colors_scheme_section"],
			"uzml_heading_color" => ["#2c4964", "Heading Color", "uzml_custom_colors_scheme_section"],
			"uzml_anchor_color" => ["#1977cc", "Anchor Color", "uzml_custom_colors_scheme_section"],
			"uzml_menu_color" => ["#1977cc", "Nav Primary Color", "uzml_menu_custom_section"],
			"uzml_hover_border_color" => ["#1977cc", "Nav Hover Border Color", "uzml_menu_custom_section"],
		);

		// Add Color Controls
		foreach( $color_settings as $setting_key => [$color, $label, $sectionName] ){
			$wp_customize->add_setting($setting_key, [
				"default" => $color,
				"transport" => "refresh",
			]);

			$wp_customize->add_control( new WP_Customize_Color_Control( 
				$wp_customize, 
				$setting_key, 
				[ 
					"label" => __( $label, "uzml-medilab"),
					"section" => $sectionName,
					"settings" => $setting_key,
				]
			));
		}
   }
   add_action("customize_register", "uzml_medilab_customize_register");

   // Generate Dynamic CSS
   function uzml_medilab_customize_styling(){
		echo "<style type='text/css'>
			:root { 
				--background-color:  ".get_Theme_mod("uzml_body_background_color", "#fff").";
				--default-color:  ".get_Theme_mod("uzml_text_color", "#444444").";
				--heading-color: ".get_Theme_mod("uzml_heading_color", "#2c4964").";
				--accent-color:  " . get_Theme_mod("uzml_primary_color", "#1977cc") .  " ;
				--nav-color: ".get_Theme_mod("uzml_menu_color", "#1977cc")." !important;  
				--nav-hover-color: ".get_Theme_mod("uzml_hover_border_color", "#1977cc")." !important; 
			}
			a{
				color: ".get_Theme_mod("uzml_anker_color", "#1977cc")." !important;	
			}	
			header .sitename{
				color: ".get_Theme_mod("uzml_brand_text_color", "#1977cc")." !important;	
			}	
			.menu-item a {
				color: var(--nav-color) !important;
			}
		</style>";
   }
   add_action( 'wp_head', 'uzml_medilab_customize_styling' );