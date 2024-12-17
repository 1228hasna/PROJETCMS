<?php

add_action("init","goldy_jewelry_theme_limit_set",11);
function goldy_jewelry_theme_limit_set(){
	global $goldy_jewelry_themetype, $goldy_mex_themetype;

	if (is_plugin_active('slivery-extender/slivery-extender.php')) {

		// Header
		new \Kirki\Field\Select(
			[
				'settings'    => 'goldy_header_bg_width_layout',
				'label'       => esc_html__( 'Header Background Width Layouts', 'goldy-jewelry' ),
				'section'     => 'header_width_section',
				'default'     => 'content_width',
				'priority'	  => 5,
				'choices'     => [
					'full_width' => esc_html__( 'Full Width', 'goldy-jewelry' ),
					'content_width' => esc_html__( 'Content Width', 'goldy-jewelry' ),
				],
			]
		);


		// social icon
		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_contact_icon_color',
				'label'       => __( 'Icon Color', 'goldy-jewelry' ),
	        	'section'     => 'contact_section',
	        	'default'     => '#ffffff',
	        	'priority' => 20,
	        	'choices'     => [
	            'alpha' => true,
	        	],
	        'output' => array(
	            array(
	               'element'  => '.opening_icon i, .header_top_bar i',
	               'property' => 'color',
	               'suffix'	  => '!important'
	            ),
		      ),
			]
		);


		// social_icon font-size //

		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_contact_icon_font_size',
				'label'       => __( 'Icon Fony Size', 'goldy-jewelry' ),
	        	'section'     => 'contact_section',
	        	'default'     => '20px',
	        	'priority' => 20,
	        	'choices'     => [
	            'alpha' => true,
	        	],
	        'output' => array(
	            array(
	               'element'  => '.opening_icon i, .header_top_bar i',
	               'property' => 'font-size',
	               'suffix'	  => '!important'
	            ),
		      ),
			]
		);


		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_contact_icon_bg_color',
				'label'       => __( 'Icon Background Color', 'goldy-jewelry' ),
	        	'section'     => 'contact_section',
	        	'default'     => 'transparent',
	        	'priority' => 25,
	        	'choices'     => [
	            'alpha' => true,
	        	],
	        'output' => array(
	            array(
	               'element'  => '.header_top_bar i',
	               'property' => 'background',
	               'suffix'	  => '!important'
	            ),
		      ),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_contact_mob_text_color',
				'label'       => __( 'Desktop Text Color', 'goldy-jewelry' ),
	        	'section'     => 'contact_section',
	        	'default'     => '#ffffff',
	        	'priority' => 30,
	        	'choices'     => [
	            'alpha' => true,
	        	],
	        'output' => array(
	            array(
	               'element'  => '.opening_info p, .contact_info p, .email_info p',
	               'property' => 'color',
	               
	            ),
		      ),
			]
		);


		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_contact_mob_font_size',
				'label'       => __( 'Desktop Font Size', 'goldy-jewelry' ),
	        	'section'     => 'contact_section',
	        	'default'     => '25px',
	        	'priority' => 30,
	        	'choices'     => [
	            'alpha' => true,
	        	],
	        'output' => array(
	            array(
	               'element'  => '.site-title',
	               'property' => 'font-size',
	               
	            ),
		      ),
			]
		);

		
		// our portfolio
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_portfolio_content_bg_color',
				'label'       => __( 'Content Background Color', 'goldy-jewelry' ),
				'section'     => 'our_portfolio_section',
				'default'     => '#def2f1',
				'priority'    => 55,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.our_port_containe',
						'property' => 'background-color',
					),
				),
			]
		);
		
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_portfolio_icon_hover_color',
				'label'       => __( 'Icon Hover Color', 'goldy-jewelry' ),
				'section'     => 'our_portfolio_section',
				'default'     => '#214462',
				'priority'    => 80,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.our_portfolio_btn a:hover',
						'property' => 'color',
					),
				),
			]
		);

		//featured section 
		new \Kirki\Field\Color(
			[
				'settings'    => 'featured_section_bg_hover_text_color',
				'label'       => __( 'Contain Text Hover Color', 'goldy-jewelry' ),
				'section'     => 'featured_section',
				'default'     => '#000000',
				'priority'    => 70,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.section-featured-wrep:hover',
						'property' => 'color',
						'suffix'	  => '!important',
					),
				),
			]
		);

		// About 
		new \Kirki\Field\Color(
			[
				'settings'    => 'goldy_jewelry_about_section_image2',
				'label'       => esc_html__( 'About Contain Background Image', 'goldy-jewelry' ),
				'section'     => 'about_section',
				'default'     => '#def2f1',
				'priority' => 60,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.about_container_data, .about_container_data:before',
						'property' => 'background',
					),
				),
			]
		);

		

		// our team 
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_team_container_bg_color',
				'label'       => __( 'Contain Background Color', 'goldy-jewelry' ),
				'section'     => 'our_team_section',
				'default'     => 'rgb(38 40 50 / 60%)',
				'priority'    => 65,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.our_team_icon_contain .our_teams_contain',
						'property' => 'background-color',
					),
				),
			]
		);

		// Our Testimonial
		new \Kirki\Field\Color(
			[
				'settings'    => 'our_testimonial_img_border_color',
				'label'       => __( 'Image Border Color', 'goldy-jewelry' ),
				'section'     => 'our_testimonial_section',
				'default'     => '#cccccc',
				'priority'    => 105,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.testimonials_image .image_testimonials img',
						'property' => 'border-color',
					),
				),
			]
		);

		// book an appoinment
		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_book_an_appointment_contain_bg_color',
				'label'    => esc_html__( 'Contain Background Color', 'goldy-jewelry' ),
				'section'  => 'book_an_appoinment_section',
				'default'  => 'transparent',
				'priority' => 55,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.appointment_section_info .appointment_fields_data',
						'property' => 'background-color',
					),
				),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings' => 'goldy_book_an_appointment_form_field_color',
				'label'    => esc_html__( 'Form Field Color', 'goldy-jewelry' ),
				'section'  => 'book_an_appoinment_section',
				'default'  => '#ffffff',
				'priority' => 60,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => 'form.appoinment_reset input[type="text"], input[type="email"], input[type="number"], .af_table_data textarea, input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="number"]::placeholder, .af_table_data textarea::placeholder',
						'property' => 'color',
					),
					array(
						'element'  => 'form.appoinment_reset input[type="text"], input[type="email"], input[type="number"], .af_table_data textarea',
						'property' => 'border-bottom-color',
					),
				),
			]
		);

		new \Kirki\Field\Image(
			[
				'settings'    => 'goldy_book_an_appointment_bg_image',
				'label'       => esc_html__( 'Backgroung Image', 'kirki' ),
				'section'     => 'book_an_appoinment_section',
				'default'     => '',
				'priority'    => 65,
			]
		);

		new \Kirki\Field\Select(
			[
				'settings'    => 'goldy_book_an_appointment_background_position',
				'label'       => esc_html__( 'Background Position', 'kirki' ),
				'section'     => 'book_an_appoinment_section',
				'default'     => 'center center',
				'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
				'priority'    => 70,
				'choices'     => [
					'left top' => esc_html__( 'Left Top', 'kirki' ),
					'left center' => esc_html__( 'Left Center', 'kirki' ),
					'left bottom' => esc_html__( 'Left Bottom', 'kirki' ),
					'right top' => esc_html__( 'Right Top', 'kirki' ),
					'right center' => esc_html__( 'Right Center', 'kirki' ),
					'right bottom' => esc_html__( 'Right Bottom', 'kirki' ),
					'center top' => esc_html__( 'Center Top', 'kirki' ),
					'center center' => esc_html__( 'Center Center', 'kirki' ),
					'center bottom' => esc_html__( 'Center Bottom', 'kirki' ),
				],
				'output' => array(
					array(
						'element'  => '.appointment_section_info',
						'property' => 'background-position',
						'suffix'	  => '!important',
					),
				),
			]
		);

		new \Kirki\Field\Select(
			[
				'settings'    => 'goldy_book_an_appointment_background_attachment',
				'label'       => esc_html__( 'Background Attachment', 'kirki' ),
				'section'     => 'book_an_appoinment_section',
				'default'     => 'scroll',
				'priority'    => 75,
				'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
				'choices'     => [
					'scroll' => esc_html__( 'Scroll', 'kirki' ),
					'fixed' => esc_html__( 'Fixed', 'kirki' ),
				],
				'output' => array(
					array(
						'element'  => '.appointment_section_info',
						'property' => 'background-attachment',
						'suffix'	  => '!important',
					),
				),
			]
		);

		new \Kirki\Field\Select(
			[
				'settings'    => 'goldy_book_an_appointment_background_size',
				'label'       => esc_html__( 'Background Size', 'kirki' ),
				'section'     => 'book_an_appoinment_section',
				'default'     => 'cover',
				'priority'    => 80,
				'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
				'choices'     => [
					'auto' => esc_html__( 'Auto', 'kirki' ),
					'cover' => esc_html__( 'Cover', 'kirki' ),
					'contain' => esc_html__( 'Contain', 'kirki' ),
				],
				'output' => array(
					array(
						'element'  => '.appointment_section_info',
						'property' => 'background-size',
						'suffix'	  => '!important',
					),
				),
			]
		);

		//our services
		new \Kirki\Field\Color(
			[
				'settings'    => 'goldy_jewelry_our_services_contain_text_color',
				'label'       => __( 'Contain Text Color', 'goldy-jewelry' ),
				'section'     => 'our_services_section',
				'default'     => '#404040',
				'priority'    => 145,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.our_services_data',
						'property' => 'color',
					),
				),
			]
		);

		new \Kirki\Field\Color(
			[
				'settings'    => 'goldy_jewelry_our_services_data_bg_color',
				'label'       => __( 'Container Background Color', 'goldy-jewelry' ),
				'section'     => 'our_services_section',
				'default'     => '#3aafa9',
				'priority'    => 150,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => '.services_inner_data',
						'property' => 'background',
					),
				),
			]
		);

		//skin color
		new \Kirki\Field\Color(
			[
				'settings'    => 'design_skin_color',
				'label'       => __( 'Skin Color', 'kirki' ),
				'section'     => 'design_section',
				'default'     => '#3aafa9',
				'priority'	=> 5,
				'choices'     => [
					'alpha' => true,
				],
				'output' => array(
					array(
						'element'  => ':root',
						'property' => '--skin-color',
						'suffix' => ' !important',
					),
				),
			]
		);

	}else{

	}

	$goldy_jewelry_themetype['themtypeis']='normal';
	if (is_plugin_active('slivery-extender/slivery-extender.php') ) {
		$goldy_jewelry_themetype['pluginactive']="yes";
	}else{
		$goldy_jewelry_themetype['pluginactive']="no";
	}

	$goldy_jewelry_themetype['recommended_plugins_name'] = 'goldy_jewelry';
	$goldy_jewelry_themetype['goldy_documentation_Upsell_Section']= "https://www.inverstheme.com/goldy-jewelry-documentation/";
	$goldy_jewelry_themetype['pro_section_custom_control']= "https://www.inverstheme.com/theme/goldy-jewelry/";
	$goldy_jewelry_themetype['header_top_bar_bg_color']= "#3aafa9";
	$goldy_jewelry_themetype['header_top_bar_bg_color_element']= ".top_bar_info";
	$goldy_jewelry_themetype['header_text_color']= "#000000";
	$goldy_jewelry_themetype['header_text_color_element']= ".main_site_header, header#masthead p.site-description";
	$goldy_jewelry_themetype['header_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['header_bg_color_element']= ".main_site_header";
	$goldy_jewelry_themetype['mob_nav_menu_activ_color']= "#3aafa9";
	$goldy_jewelry_themetype['mob_nav_menu_activ_color_element']= "header#masthead.site-header .current-menu-ancestor > a, header#masthead.site-header .current-menu-item > a, header#masthead.site-header .current_page_item > a";
	$goldy_jewelry_themetype['mob_menu_link_color']= "#ffffff";
	$goldy_jewelry_themetype['mob_menu_link_color_element']= ".mobile_menu #primary-menu li a";
	$goldy_jewelry_themetype['container_bg_color']= "#f9f3f2";
	$goldy_jewelry_themetype['container_text_color']= "#000000";
	$goldy_jewelry_themetype['_boxed_layout_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['_content_boxed_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['_sidebar_heading_bg_color']= "#393939";
	$goldy_jewelry_themetype['_sidebar_heading_text_color']= "#ffffff";
	$goldy_jewelry_themetype['mob_sub_menu_bg_color']= "#3aafa9";
	$goldy_jewelry_themetype['mob_sub_menu_bg_color_element']= ".main-navigation .sub-menu li, .main-navigation ul ul ul.toggled-on li";
	$goldy_jewelry_themetype['link_color']= "#000";
	$goldy_jewelry_themetype['link_color_element']= ".main_site_header a";
	$goldy_jewelry_themetype['link_hover_color']= "#3aafa9";
	$goldy_jewelry_themetype['link_hover_color_element']= "#masthead .main_site_header a:hover";
	$goldy_jewelry_themetype['_menu_active_color']= "#3aafa9";
	$goldy_jewelry_themetype['_menu_active_color_element']= "header#masthead.site-header .current-menu-ancestor > a, header#masthead.site-header .current-menu-item > a, header#masthead.site-header .current_page_item > a, footer#colophon .current-menu-item > a, .current_page_item > a";
	$goldy_jewelry_themetype['desk_submenu_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['desk_submenu_bg_color_element']= ".main-navigation .nav-menu ul.sub-menu, .main-navigation .nav-menu ul.children";
	$goldy_jewelry_themetype['mob_nav_menu_bg_color']= "#214462";	
	$goldy_jewelry_themetype['mob_nav_menu_bg_color_element']= ".mobile_menu";
	$goldy_jewelry_themetype['silvery_social_icon_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_social_icon_color_element']= "header#masthead a.social_icon";
	$goldy_jewelry_themetype['silvery_social_icon_bg_color']= "rgba(69,63,63,0.18)";
	$goldy_jewelry_themetype['silvery_social_icon_bg_color_element']= ".social_icon i";
	$goldy_jewelry_themetype['silvery_social_icon_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_social_icon_hover_color_element']= "header#masthead a.social_icon:hover";
	$goldy_jewelry_themetype['silvery_social_icon_hover_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_social_icon_hover_bg_color_element']= ".social_icon i:hover:after";
	$goldy_jewelry_themetype['button_bg_color']= "#3aafa9";
	$goldy_jewelry_themetype['button_bg_color_element']= 'button, button#navbar-toggle, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_jewelry_themetype['_button_bg_hover_color']= "#214462";
	$goldy_jewelry_themetype['_button_bg_hover_color_element']= 'button::before, button::after, input[type="button"]::before, input[type="reset"]::before, input[type="submit"]::before, input[type="submit"]::after, .wp-block-search .wp-block-search__button::before, .wp-block-search .wp-block-search__button::after, .nav-previous a::before, .nav-previous a::after, .nav-next a::before, .nav-next a::after, .buttons::before, .buttons::after ,.woocommerce a.button::before, .woocommerce a.button::after, .woocommerce button::before, .woocommerce button::after, .woocommerce .single-product button::before, .woocommerce .single-product button::after, .woocommerce button.button.alt::before, .woocommerce button.button.alt::after, .woocommerce a.button.alt::before, .woocommerce a.button.alt::after, .woocommerce button.button.alt.disabled::before, .woocommerce button.button.alt.disabled::after';
	$goldy_jewelry_themetype['_button_text_color']= "#ffffff";
	$goldy_jewelry_themetype['_button_text_color_element']= 'button, button#navbar-toggle, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button, .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_jewelry_themetype['_button_texthover_color']= "#000000";
	$goldy_jewelry_themetype['_button_texthover_color_element']= 'button:hover, button#navbar-toggle:hover, input[type="button"]:hover , input[type="reset"]:hover , input[type="submit"]:hover , .wp-block-search .wp-block-search__button:hover, .nav-previous a:hover, .buttons:hover, .nav-next a:hover, .woocommerce a.button:hover, .woocommerce button:hover, .woocommerce .single-product button:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt.disabled:hover';
	$goldy_jewelry_themetype['_button_border_radius']= "2px";
	$goldy_jewelry_themetype['_button_border_color']= "#cccccc";
	$goldy_jewelry_themetype['_button_border_color_element']= 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled';
	$goldy_jewelry_themetype['_scroll_button_bg_color']= "transparent";
	$goldy_jewelry_themetype['_scroll_button_color']= "transparent";
	$goldy_jewelry_themetype['_scroll_button_bg_hover_color']= "transparent";
	$goldy_jewelry_themetype['_scroll_button_text_hover_color']= "transparent";
	$goldy_jewelry_themetype['silvery_featured_slider_text_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_featured_slider_arrow_text_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_featured_slider_arrow_bg_color']= "transparent";
	$goldy_jewelry_themetype['silvery_featured_slider_arrow_text_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['silvery_featured_slider_arrow_bg_hover_color']= "#3aafa9";
	$goldy_jewelry_themetype['featured_section_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['featured_section_text_color']= "#333333";
	$goldy_jewelry_themetype['featured_section_contain_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['featured_section_contain_bg_color_element']= ".featured-section_data .featured-section .card-container .section-featured-wrep";
	$goldy_jewelry_themetype['featured_section_bg_hover_color']= "ffffff";
	$goldy_jewelry_themetype['featured_section_bg_hover_color_element']= ".section-featured-wrep:hover:before";
	$goldy_jewelry_themetype['featured_section_contain_text_color']= "#000000";
	$goldy_jewelry_themetype['featured_section_contain_text_color_element']= ".section-featured-wrep";
	$goldy_jewelry_themetype['featured_section_icon_color']= "#3aafa9";
	$goldy_jewelry_themetype['featured_section_icon_color_element']= ".featured-section_data .featured_content .featured-icon";
	$goldy_jewelry_themetype['featured_section_icon_hover_color']= "#000000";
	$goldy_jewelry_themetype['featured_section_icon_hover_color_element']= ".featured-section_data .section-featured-wrep:hover i";
	$goldy_jewelry_themetype['featured_section_icon_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['featured_section_icon_bg_color_element']= ".featured-section_data .featured_content .featured-icon";
	$goldy_jewelry_themetype['featured_section_icon_bg_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['featured_section_icon_bg_hover_color_element']= ".featured-section_data .section-featured-wrep:hover .featured-icon";
	$goldy_jewelry_themetype['featured_section_border_color']= "#ffffff";
	$goldy_jewelry_themetype['featured_section_border_color_background_element']= "a.section-featured";
	$goldy_jewelry_themetype['featured_section_border_color_border_element']= ".featured-icon:before";
	$goldy_jewelry_themetype['featured_section_icon_size']= "55px";
	$goldy_jewelry_themetype['featured_section_item_limit']= "3";
	$goldy_jewelry_themetype['_book_an_appointment_bg_color']= "#f9f9f9";
	$goldy_jewelry_themetype['_book_an_appointment_title_color']= "#000000";
	$goldy_jewelry_themetype['about_section_bg_color']= "#f6f6f6";
	$goldy_jewelry_themetype['about_section_bg_color_element']= ".about_section_info";
	$goldy_jewelry_themetype['about_section_title_text_color']= "#000000";
	$goldy_jewelry_themetype['our_portfolio_bg_color']= "#f9f9f9";
	$goldy_jewelry_themetype['our_portfolio_bg_color_element']= ".our_portfolio_info";
	$goldy_jewelry_themetype['our_portfolio_title_color']= "#333333";
	$goldy_jewelry_themetype['our_portfolio_text_color']= "#333333";
	$goldy_jewelry_themetype['our_portfolio_text_color_element']= ".our_portfolio_info";
	$goldy_jewelry_themetype['our_portfolio_icon_bg_color']= "#def2f1";
	$goldy_jewelry_themetype['our_portfolio_icon_bg_color_element']= ".our_portfolio_btn a";
	$goldy_jewelry_themetype['our_portfolio_icon_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_portfolio_icon_color_element']= ".our_portfolio_btn a";
	$goldy_jewelry_themetype['our_portfolio_border_color']= "#214462";
	$goldy_jewelry_themetype['our_portfolio_border_color_background_element']= ".our_port_containe .our_portfolio_title i";
	$goldy_jewelry_themetype['our_portfolio_border_color_color_element']= ".our_port_containe .our_portfolio_title i";
	$goldy_jewelry_themetype['our_portfolio_border_hover_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_portfolio_border_hover_color_background_element']= ".our_portfolio_info .our_portfolio_caption .our_portfolio_container:hover .our_portfolio_title i";
	$goldy_jewelry_themetype['our_portfolio_border_hover_color_color_element']= ".our_portfolio_info .our_portfolio_caption .our_portfolio_container:hover .our_portfolio_title i";
	$goldy_jewelry_themetype['our_portfolio_container_text_color']= "#000000";
	$goldy_jewelry_themetype['our_portfolio_container_text_color_element']= ".our_portfolio_info .our_portfolio_container";
	$goldy_jewelry_themetype['our_team_bg_color']= "#f6f6f6";
	$goldy_jewelry_themetype['our_team_bg_color_element']= ".our_team_section";
	$goldy_jewelry_themetype['our_team_text_color']= "#333333";
	$goldy_jewelry_themetype['our_team_text_color_element']= ".our_team_section .our_team_main_title";
	$goldy_jewelry_themetype['our_team_container_text_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['our_team_container_text_hover_color_element']= ".our_team_section .our_team_container_data:hover .our_team_icon_contain";
	$goldy_jewelry_themetype['our_team_link_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_team_link_color_element']= ".our_team_icon_contain a";
	$goldy_jewelry_themetype['our_team_link_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['our_team_link_hover_color_element']= ".our_team_icon_contain .our_team_title a:hover";
	$goldy_jewelry_themetype['our_testimonial_bg_color']= "#f6f6f6";
	$goldy_jewelry_themetype['our_testimonial_bg_color_element']= ".our_testimonial_section";
	$goldy_jewelry_themetype['our_testimonial_text_color']= "#333333";
	$goldy_jewelry_themetype['our_testimonial_text_color_element']= ".our_testimonial_section .testimonial_title h2, .our_testimonial_section .our_testimonial_main_disc p";
	$goldy_jewelry_themetype['our_testimonial_quote_color']= "#214462";	
	$goldy_jewelry_themetype['our_testimonial_quote_color_element']= ".our_testimonial_icon i";
	$goldy_jewelry_themetype['our_testimonial_quote_hover_color']= "red";
	$goldy_jewelry_themetype['our_testimonial_quote_hover_color_element']= ".testimonials_data:hover i.fa.fa-quote-right";
	$goldy_jewelry_themetype['our_testimonial_img_hover_border_color']= "#cccccc";
	$goldy_jewelry_themetype['our_testimonial_img_hover_border_color_element']= ".image_testimonials img:hover";
	$goldy_jewelry_themetype['our_testimonial_contain_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['our_testimonial_contain_bg_color_element']= ".testimonials_data";
	$goldy_jewelry_themetype['our_testimonial_contain_bg_color_border_element']= ".testimonials_data .testinomial_description p:before";
	$goldy_jewelry_themetype['our_testimonial_contain_description_bg_color']= "rgba(255, 255, 255, 0.01)";
	$goldy_jewelry_themetype['our_testimonial_contain_description_bg_color_element']= ".testinomial_description";
	$goldy_jewelry_themetype['our_testimonial_container_description_color']= "#000000";
	$goldy_jewelry_themetype['our_testimonial_container_description_color_element']= ".testinomial_description p";
	$goldy_jewelry_themetype['our_testimonial_headline_text_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_testimonial_headline_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .testimonials_title h3";
	$goldy_jewelry_themetype['our_testimonial_subheadline_text_color']= "#000000";
	$goldy_jewelry_themetype['our_testimonial_subheadline_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .testimonials_title h4";
	$goldy_jewelry_themetype['our_testimonial_arrow_bg_color']= "transparent";
	$goldy_jewelry_themetype['our_testimonial_arrow_bg_color_element']= ".our_testimonial_section .testinomial_owl_slider .owl-nav button";
	$goldy_jewelry_themetype['our_testimonial_arrow_text_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_testimonial_arrow_text_color_element']= ".our_testimonial_section .testinomial_owl_slider .owl-nav button";
	$goldy_jewelry_themetype['our_testimonial_arrow_text_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['our_testimonial_arrow_text_hover_color_element']= ".our_testimonial_section button.owl-prev:hover, .our_testimonial_section button.owl-next:hover";
	$goldy_jewelry_themetype['our_testimonial_arrow_bg_hover_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_testimonial_arrow_bg_hover_color_element']= ".our_testimonial_section button.owl-prev:hover, .our_testimonial_section button.owl-next:hover";
	$goldy_jewelry_themetype['our_sponsors_text_color']= "#000000";
	$goldy_jewelry_themetype['our_sponsors_text_color_element']= ".our_sponsors_section";
	$goldy_jewelry_themetype['our_sponsors_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['our_sponsors_bg_color_element']= ".our_sponsors_section";
	$goldy_jewelry_themetype['our_sponsors_arrow_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_sponsors_arrow_color_element']= ".our_sponsors_section .our_sponsors_contain .owl-nav button";
	$goldy_jewelry_themetype['our_sponsors_arrow_bg_color']= "transparent";
	$goldy_jewelry_themetype['our_sponsors_arrow_bg_color_element']= ".our_sponsors_section .our_sponsors_contain .owl-nav button";
	$goldy_jewelry_themetype['our_sponsors_arrow_text_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['our_sponsors_arrow_text_hover_color_element']= ".our_sponsors_section .our_sponsors_contain button.owl-prev:hover, .our_sponsors_section .our_sponsors_contain button.owl-next:hover";
	$goldy_jewelry_themetype['our_sponsors_arrow_bghover_color']= "#3aafa9";
	$goldy_jewelry_themetype['our_sponsors_arrow_bghover_color_element']= ".our_sponsors_section .our_sponsors_contain button.owl-prev:hover, .our_sponsors_section .our_sponsors_contain button.owl-next:hover";
	$goldy_jewelry_themetype['our_services_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['our_services_bg_color_element']= ".services_section";
	$goldy_jewelry_themetype['our_services_first_widget_bg_color']= "#0e1422";
	$goldy_jewelry_themetype['our_services_first_widget_bg_color_element']= ".widget_section_one";
	$goldy_jewelry_themetype['our_services_first_widget_text_color']= "#ffffff";
	$goldy_jewelry_themetype['our_services_first_widget_text_color_element']= ".widget_section_one";
	$goldy_jewelry_themetype['our_services_second_widget_bg_color']= "#214462";
	$goldy_jewelry_themetype['our_services_second_widget_bg_color_element']= ".widget_section_two";
	$goldy_jewelry_themetype['our_services_second_widget_text_color']= "#ffffff";
	$goldy_jewelry_themetype['our_services_second_widget_text_color_element']= ".widget_section_two";
	$goldy_jewelry_themetype['our_services_third_widget_bg_color']= "#0e1422";
	$goldy_jewelry_themetype['our_services_third_widget_bg_color_element']= ".widget_section_three";
	$goldy_jewelry_themetype['our_services_third_widget_text_color']= "#ffffff";
	$goldy_jewelry_themetype['our_services_third_widget_text_color_element']= ".widget_section_three";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_size']= "50px";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_size_element']= ".goldy_mex_funfact_content .goldy-funfact-icon i";
	$goldy_jewelry_themetype['goldy_funfact_section_bg_color']= "#dcf0ef";
	$goldy_jewelry_themetype['goldy_funfact_section_text_color']= "#333333";
	$goldy_jewelry_themetype['goldy_funfact_section_text_color_element']= ".goldy_mex_funfact_section";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_bg_color_element']= ".goldy_mex_funfact_content";
	$goldy_jewelry_themetype['goldy_funfact_section_bg_hover_color']= "#ffffff";
	$goldy_jewelry_themetype['goldy_funfact_section_bg_hover_color_element']= ".goldy_mex_funfact_content:hover";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_text_color']= "#333333";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_text_color_element']= ".goldy_mex_funfact_content";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_text_hover_color']= "#333333";
	$goldy_jewelry_themetype['goldy_funfact_section_contain_text_hover_color_element']= ".goldy_mex_funfact_content:hover";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_color']= "#3aafa9";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_color_element']= ".goldy_mex_funfact_content .goldy-funfact-icon i";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_hover_color']= "#000000";
	$goldy_jewelry_themetype['goldy_funfact_section_icon_hover_color_element']= ".goldy_mex_funfact_content:hover .goldy-funfact-icon i";
	$goldy_jewelry_themetype['goldy_funfact_section_border_color']= "#484a60";
	$goldy_jewelry_themetype['goldy_funfact_section_border_color_element']= ".goldy_mex_funfact_content";
	$goldy_jewelry_themetype['goldy_funfact_section_border_color_property']= "border-color";
	$goldy_jewelry_themetype['_footer_bg_color']= "#0e1422";
	$goldy_jewelry_themetype['_footer_bg_color_element']= "footer#colophon";
	$goldy_jewelry_themetype['_footer_text_color']= "#ffffff";
	$goldy_jewelry_themetype['_footer_text_color_element']= "footer#colophon";
	$goldy_jewelry_themetype['footer_link_color']= "#b0a9c0";
	$goldy_jewelry_themetype['footer_link_color_element']= "footer#colophon a";
	$goldy_jewelry_themetype['_footer_link_hover_color']= "#3aafa9";
	$goldy_jewelry_themetype['_footer_link_hover_color_element']= "footer#colophon a:hover";
	$goldy_jewelry_themetype['design_underline_color']= "transparent";	
	$goldy_jewelry_themetype['silvary_breadcrumb_bg_color']= "#070707cc";
	$goldy_jewelry_themetype['silvary_breadcrumb_bg_color_element']= ".breadcrumb_info";
	$goldy_jewelry_themetype['silvary_breadcrumb_text_color']= "#ffffff";
	$goldy_jewelry_themetype['silvary_breadcrumb_text_color_element']= ".breadcrumb_info";
	$goldy_jewelry_themetype['silvary_breadcrumb_link_color']= "#3aafa9";
	$goldy_jewelry_themetype['silvary_breadcrumb_link_color_element']= "section#breadcrumb-section a";
	$goldy_jewelry_themetype['goldy_loader_image']= get_theme_file_uri('assets/images/loader.gif');
	$goldy_jewelry_themetype['goldy_loader_bg_color']= "#ffffff";
	$goldy_jewelry_themetype['default_number_featured_section']=4;
	global $goldy_mex_default;
	$goldy_mex_default['options']['our_testimonial_desktop_num']=3;
	$goldy_mex_default['options']['goldy_mex_featured_section_content']= [
			[
				'icon_value'    => 'fa-cloud',
				'title'    => esc_html__( 'Featured title 1', 'goldy-mex' ),
				'text'    => esc_html__( 'this is featured.', 'goldy-mex' ),	
				'link_url'    => esc_html__('#', 'goldy-mex'),
			],
			[
				'icon_value'    => 'fa-facebook',
				'title'    =>  esc_html__( 'Featured title 2', 'goldy-mex' ),
				'text'    =>  esc_html__( 'this is featured.', 'goldy-mex' ),	
				'link_url'    => esc_html__('#', 'goldy-mex'),
			],
			[
				'icon_value'    => 'fa-twitter',
				'title'    => esc_html__( 'Featured title 3', 'goldy-mex' ),
				'text'    => esc_html__( 'this is featured.', 'goldy-mex' ),
				'link_url'    => esc_html__('#', 'goldy-mex'),	
			],
			[
				'icon_value'    => 'fa-whatsapp',
				'title'    => esc_html__( 'Featured title 4', 'goldy-mex' ),
				'text'    => esc_html__( 'this is featured.', 'goldy-mex' ),
				'link_url'    => esc_html__('#', 'goldy-mex'),	
			],
		];
	if (is_plugin_active('slivery-extender/slivery-extender.php')) {
		$goldy_jewelry_themetype['global_ordering_default'] = array(
			'goldy_mex_featuredimage_slider',
			'goldy_mex_about_section',
			'goldy_mex_featured_section',
			'goldy_mex_our_portfolio_section',
			'goldy_mex_appointment_section',
			'goldy_mex_our_team_section',
			// 'goldy_mex_jewelry_section',
			'goldy_mex_our_testimonial_section',
			// 'goldy_mex_jewelry_pricing_plan_section',
			'goldy_mex_our_sponsors_section',
			'goldy_mex_services_section',
			'goldy_mex_funfact_section_section',
			'goldy_mex_widget_section',
		);  
	}else{
		$goldy_jewelry_themetype['global_ordering_default'] = array(
			'goldy_mex_featuredimage_slider',
			'goldy_mex_featured_section',
			// 'goldy_mex_jewelry_pricing_plan_section',
			'goldy_mex_our_sponsors_section',
			'goldy_mex_funfact_section_section',
			// 'goldy_mex_jewelry_section',
		);
	}
	$goldy_mex_themetype = $goldy_jewelry_themetype;
}

?>