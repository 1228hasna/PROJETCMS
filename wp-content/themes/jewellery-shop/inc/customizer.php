<?php
/**
 * Jewellery Shop Theme Customizer
 *
 * @package Jewellery Shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jewellery_shop_customize_register( $wp_customize ) {

	function jewellery_shop_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function jewellery_shop_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	wp_enqueue_style('jewellery-shop-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Logo
    $wp_customize->add_setting('jewellery_shop_logo_width',array(
		'default'=> '',
		'transport' => 'refresh',
		'sanitize_callback' => 'jewellery_shop_sanitize_integer'
	));
	$wp_customize->add_control(new Jewellery_Shop_Slider_Custom_Control( $wp_customize, 'jewellery_shop_logo_width',array(
		'label'	=> esc_html__('Logo Width','jewellery-shop'),
		'section'=> 'title_tagline',
		'settings'=>'jewellery_shop_logo_width',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	$wp_customize->add_setting('jewellery_shop_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_title_enable', array(
	   'settings' => 'jewellery_shop_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// site title color
	$wp_customize->add_setting('jewellery_shop_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sitetitle_color', array(
	   'settings' => 'jewellery_shop_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('jewellery_shop_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_tagline_enable', array(
	   'settings' => 'jewellery_shop_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// site tagline color
	$wp_customize->add_setting('jewellery_shop_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sitetagline_color', array(
	   'settings' => 'jewellery_shop_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// woocommerce section
	$wp_customize->add_section('jewellery_shop_woocommerce_page_settings', array(
		'title'    => __('WooCommerce Page Settings', 'jewellery-shop'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('jewellery_shop_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'jewellery_shop_sanitize_checkbox'
	));
	$wp_customize->add_control('jewellery_shop_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __(' Check To Enable Shop page sidebar','jewellery-shop'),
		'section' => 'jewellery_shop_woocommerce_page_settings',
	));

    // shop page sidebar alignment
    $wp_customize->add_setting('jewellery_shop_shop_page_sidebar_position', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'jewellery_shop_sanitize_choices',
	));
	$wp_customize->add_control('jewellery_shop_shop_page_sidebar_position',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Sidebar', 'jewellery-shop'),
		'section'        => 'jewellery_shop_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'jewellery-shop'),
			'Right Sidebar' => __('Right Sidebar', 'jewellery-shop'),
		),
	));	 

	$wp_customize->add_setting('jewellery_shop_wooproducts_nav',array(
		'default' => 'Yes',
		'sanitize_callback'	=> 'jewellery_shop_sanitize_choices'
	));
	$wp_customize->add_control('jewellery_shop_wooproducts_nav',array(
		'type' => 'select',
		'label' => __('Shop Page Products Navigation','jewellery-shop'),
		'choices' => array(
			 'Yes' => __('Yes','jewellery-shop'),
			 'No' => __('No','jewellery-shop'),
		 ),
		'section' => 'jewellery_shop_woocommerce_page_settings',
	));

	$wp_customize->add_setting( 'jewellery_shop_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'jewellery_shop_sanitize_checkbox'
    ) );
    $wp_customize->add_control('jewellery_shop_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Check To Enable Single Product Page Sidebar','jewellery-shop'),
		'section' => 'jewellery_shop_woocommerce_page_settings'
    ));

	// single product page sidebar alignment
    $wp_customize->add_setting('jewellery_shop_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'jewellery_shop_sanitize_choices',
	));
	$wp_customize->add_control('jewellery_shop_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page Sidebar', 'jewellery-shop'),
		'section'        => 'jewellery_shop_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'jewellery-shop'),
			'Right Sidebar' => __('Right Sidebar', 'jewellery-shop'),
		),
	));

	$wp_customize->add_setting('jewellery_shop_related_product_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'jewellery_shop_sanitize_checkbox'
	));
	$wp_customize->add_control('jewellery_shop_related_product_enable',array(
		'type' => 'checkbox',
		'label' => __('Check To Enable Related product','jewellery-shop'),
		'section' => 'jewellery_shop_woocommerce_page_settings',
	));

	$wp_customize->add_setting( 'jewellery_shop_woo_product_img_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'jewellery_shop_sanitize_integer'
    ) );
    $wp_customize->add_control(new Jewellery_Shop_Slider_Custom_Control( $wp_customize, 'jewellery_shop_woo_product_img_border_radius',array(
		'label'	=> esc_html__('Woo Product Img Border Radius','jewellery-shop'),
		'section'=> 'jewellery_shop_woocommerce_page_settings',
		'settings'=>'jewellery_shop_woo_product_img_border_radius',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

    // Add a setting for number of products per row
    $wp_customize->add_setting('jewellery_shop_products_per_row', array(
	  'default'   => '3',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'jewellery_shop_sanitize_integer'
    ));

    $wp_customize->add_control('jewellery_shop_products_per_row', array(
	  'label'    => __('Woo Products Per Row', 'jewellery-shop'),
	  'section'  => 'jewellery_shop_woocommerce_page_settings',
	  'settings' => 'jewellery_shop_products_per_row',
	  'type'     => 'select',
	  'choices'  => array(
		  '2' => '2',
		  '3' => '3',
		  '4' => '4',
	  ),
    ));

    // Add a setting for the number of products per page
    $wp_customize->add_setting('jewellery_shop_products_per_page', array(
	  'default'   => '9',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'jewellery_shop_sanitize_integer'
    ));

    $wp_customize->add_control('jewellery_shop_products_per_page', array(
	  'label'    => __('Woo Products Per Page', 'jewellery-shop'),
	  'section'  => 'jewellery_shop_woocommerce_page_settings',
	  'settings' => 'jewellery_shop_products_per_page',
	  'type'     => 'number',
	  'input_attrs' => array(
		 'min'  => 1,
		 'step' => 1,
	  ),
    ));

    $wp_customize->add_setting('jewellery_shop_product_sale_position',array(
        'default' => 'Left',
        'sanitize_callback' => 'jewellery_shop_sanitize_choices'
	));
	$wp_customize->add_control('jewellery_shop_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','jewellery-shop'),
        'section' => 'jewellery_shop_woocommerce_page_settings',
        'choices' => array(
            'Left' => __('Left','jewellery-shop'),
            'Right' => __('Right','jewellery-shop'),
        ),
	) );   	

	//Theme Options
	$wp_customize->add_panel( 'jewellery_shop_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'jewellery-shop' ),
	) );

	//Site Layout Section
	$wp_customize->add_section('jewellery_shop_site_layoutsec',array(
		'title'	=> __('Manage Site Layout Section ','jewellery-shop'),
		'description' => __('<p class="sec-title">Manage Site Layout Section</p>','jewellery-shop'),
		'priority'	=> 1,
		'panel' => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_preloader',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_preloader', array(
	   'section'   => 'jewellery_shop_site_layoutsec',
	   'label'	=> __('Check to show preloader','jewellery-shop'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting('jewellery_shop_box_layout',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_box_layout', array(
	   'section'   => 'jewellery_shop_site_layoutsec',
	   'label'	=> __('Check to Show Box Layout','jewellery-shop'),
	   'type'      => 'checkbox'
 	));	

	$wp_customize->add_setting( 'jewellery_shop_theme_page_breadcrumb',array(
		'default' => false,
        'sanitize_callback'	=> 'jewellery_shop_sanitize_checkbox',
	) );
	 $wp_customize->add_control('jewellery_shop_theme_page_breadcrumb',array(
       'section' => 'jewellery_shop_site_layoutsec',
	   'label' => __( 'Check To Enable Theme Page Breadcrumb','jewellery-shop' ),
	   'type' => 'checkbox'
   ));	

    // Add Settings and Controls for Page Layout
    $wp_customize->add_setting('jewellery_shop_sidebar_page_layout',array(
	  'default' => 'right',
	  'sanitize_callback' => 'jewellery_shop_sanitize_choices'
	));
	$wp_customize->add_control('jewellery_shop_sidebar_page_layout',array(
		'type' => 'radio',
		'label'     => __('Theme Page Sidebar Position', 'jewellery-shop'),
		'section' => 'jewellery_shop_site_layoutsec',
		'choices' => array(
			'full' => __('Full','jewellery-shop'),
			'left' => __('Left','jewellery-shop'),
			'right' => __('Right','jewellery-shop'),
	),
	) );		

	$wp_customize->add_setting( 'jewellery_shop_layout_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_layout_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
		  'section' => 'jewellery_shop_site_layoutsec'
	));	

	//Global Color
	$wp_customize->add_section('jewellery_shop_global_color', array(
		'title'    => __('Manage Global Color Section', 'jewellery-shop'),
		'panel'    => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_first_color', array(
		'default'           => '#f5c115',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'jewellery_shop_first_color', array(
		'label'    => __('Theme Color', 'jewellery-shop'),
		'section'  => 'jewellery_shop_global_color',
		'settings' => 'jewellery_shop_first_color',
	)));	

	$wp_customize->add_setting( 'jewellery_shop_global_color_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_global_color_settings_upgraded_features', array(
			'type'=> 'hidden',
			'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
				<a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
			'section' => 'jewellery_shop_global_color'
	));	

	// Header Section
	$wp_customize->add_section('jewellery_shop_header_section', array(
        'title' => __('Manage Header Section', 'jewellery-shop'),
		'description' => __('<p class="sec-title">Manage Header Section</p>','jewellery-shop'),
        'priority' => null,
		'panel' => 'jewellery_shop_panel_area',
 	));

	$wp_customize->add_setting('jewellery_shop_stickyheader',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_stickyheader', array(
	   'section'   => 'jewellery_shop_header_section',
	   'label'	=> __('Check To Show Sticky Header','jewellery-shop'),
	   'type'      => 'checkbox'
 	));

	// header border enable disable
	$wp_customize->add_setting('jewellery_shop_headerborder_enable',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_headerborder_enable', array(
	   'settings' => 'jewellery_shop_headerborder_enable',
	   'section'   => 'jewellery_shop_header_section',
	   'label'     => __('Enable Bottom Design','jewellery-shop'),
	   'type'      => 'checkbox'
	));

 	// header bg color
	$wp_customize->add_setting('jewellery_shop_headerbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headerbg_color', array(
	   'settings' => 'jewellery_shop_headerbg_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('BG Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('jewellery_shop_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'jewellery_shop_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_phone_number', array(
	   'settings' => 'jewellery_shop_phone_number',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Phone Number', 'jewellery-shop'),
	   'type'      => 'text'
	));

	// header phoneicon color
	$wp_customize->add_setting('jewellery_shop_headerphoneicon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headerphoneicon_color', array(
	   'settings' => 'jewellery_shop_headerphoneicon_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Phone Icon Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header phonetext color
	$wp_customize->add_setting('jewellery_shop_headerphonetext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headerphonetext_color', array(
	   'settings' => 'jewellery_shop_headerphonetext_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Phone Text Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('jewellery_shop_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_email_address', array(
	   'settings' => 'jewellery_shop_email_address',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Email Address', 'jewellery-shop'),
	   'type'      => 'text'
	));

	// header emailicon color
	$wp_customize->add_setting('jewellery_shop_headeremailicon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headeremailicon_color', array(
	   'settings' => 'jewellery_shop_headeremailicon_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Email Icon Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header emailtext color
	$wp_customize->add_setting('jewellery_shop_headeremailtext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headeremailtext_color', array(
	   'settings' => 'jewellery_shop_headeremailtext_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Email Text Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header rightcontactbox color
	$wp_customize->add_setting('jewellery_shop_headerrightcontactbox_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headerrightcontactbox_color', array(
	   'settings' => 'jewellery_shop_headerrightcontactbox_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Right Contact Box BG Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header menu color
	$wp_customize->add_setting('jewellery_shop_headermenu_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headermenu_color', array(
	   'settings' => 'jewellery_shop_headermenu_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Menu Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header menuhrv color
	$wp_customize->add_setting('jewellery_shop_headermenuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headermenuhrv_color', array(
	   'settings' => 'jewellery_shop_headermenuhrv_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Active Menu & Hover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header submenu color
	$wp_customize->add_setting('jewellery_shop_headersubmenu_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headersubmenu_color', array(
	   'settings' => 'jewellery_shop_headersubmenu_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Sub Menu Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header submenuhrv color
	$wp_customize->add_setting('jewellery_shop_headersubmenuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headersubmenuhrv_color', array(
	   'settings' => 'jewellery_shop_headersubmenuhrv_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Sub Menu Hover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header submenubg color
	$wp_customize->add_setting('jewellery_shop_headersubmenubg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headersubmenubg_color', array(
	   'settings' => 'jewellery_shop_headersubmenubg_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Sub Menu BG Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// header submenubgbrd color
	$wp_customize->add_setting('jewellery_shop_headersubmenubgbrd_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_headersubmenubgbrd_color', array(
	   'settings' => 'jewellery_shop_headersubmenubgbrd_color',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('SubMenu Border Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting( 'jewellery_shop_header_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_header_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
		  'section' => 'jewellery_shop_header_section'
	));	

	// Home Category Dropdown Section
	$wp_customize->add_section('jewellery_shop_one_cols_section',array(
		'title'	=> __('Manage Slider Section','jewellery-shop'),
		'description'	=> __('<p class="sec-title">Manage Slider Section</p> Select Category from the Dropdowns for slider, Also use the given image dimension (1600 x 850).','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area'
	));

	//Hide Section
	$wp_customize->add_setting('jewellery_shop_hide_categorysec',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_hide_categorysec', array(
	   'settings' => 'jewellery_shop_hide_categorysec',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label'     => __('Check To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_slidersection', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_slidersection', array(
	   'label'     => __('Select Category to display Slider','jewellery-shop'),
		'section' => 'jewellery_shop_one_cols_section',
		'settings'   => 'jewellery_shop_slidersection',
	) ) );

	$wp_customize->add_setting( 'jewellery_shop_slider_count', array(
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'jewellery_shop_sanitize_number_absint',
	  	'default' => 1,
	) );
	$wp_customize->add_control( 'jewellery_shop_slider_count', array(
	  	'settings' => 'jewellery_shop_slider_count',
	  	'type' => 'number',
	  	'section' => 'jewellery_shop_one_cols_section',
	  	'label' => __( 'Number Of Slide To Show','jewellery-shop'),
	) );

	$wp_customize->add_setting('jewellery_shop_button_text',array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_button_text', array(
	   'settings' => 'jewellery_shop_button_text',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Add Button Text', 'jewellery-shop'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('jewellery_shop_button_link_slider',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('jewellery_shop_button_link_slider',array(
        'label' => esc_html__('Add Button Link','jewellery-shop'),
        'section'=> 'jewellery_shop_one_cols_section',
        'type'=> 'url'
    ));

    //Slider height
    $wp_customize->add_setting('jewellery_shop_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('jewellery_shop_slider_img_height',array(
        'label' => __('Slider Image Height','jewellery-shop'),
        'description'   => __('Add the slider image height here (eg. 600px)','jewellery-shop'),
        'input_attrs' => array(
            'placeholder' => __( '500px', 'jewellery-shop' ),
        ),
        'section'=> 'jewellery_shop_one_cols_section',
        'type'=> 'text'
    ));

	// slider leftbg color
	$wp_customize->add_setting('jewellery_shop_sliderleftbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderleftbg_color', array(
	   'settings' => 'jewellery_shop_sliderleftbg_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Left BG Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider icon color
	$wp_customize->add_setting('jewellery_shop_slidericon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_slidericon_color', array(
	   'settings' => 'jewellery_shop_slidericon_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Icon Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider title color
	$wp_customize->add_setting('jewellery_shop_slidertitle_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_slidertitle_color', array(
	   'settings' => 'jewellery_shop_slidertitle_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Title Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider description color
	$wp_customize->add_setting('jewellery_shop_sliderdescription_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderdescription_color', array(
	   'settings' => 'jewellery_shop_sliderdescription_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Description Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider buttonborder color
	$wp_customize->add_setting('jewellery_shop_sliderbuttonborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderbuttonborder_color', array(
	   'settings' => 'jewellery_shop_sliderbuttonborder_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Button Border Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider buttontext color
	$wp_customize->add_setting('jewellery_shop_sliderbuttontext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderbuttontext_color', array(
	   'settings' => 'jewellery_shop_sliderbuttontext_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Button text Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider buttonhover color
	$wp_customize->add_setting('jewellery_shop_sliderbuttonhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderbuttonhover_color', array(
	   'settings' => 'jewellery_shop_sliderbuttonhover_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Button BG Hover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// slider buttontexthover color
	$wp_customize->add_setting('jewellery_shop_sliderbuttontexthover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_sliderbuttontexthover_color', array(
	   'settings' => 'jewellery_shop_sliderbuttontexthover_color',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Button Text Hover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting( 'jewellery_shop_slider_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_slider_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
	    'section' => 'jewellery_shop_one_cols_section'
	));

	// Services Section
	$wp_customize->add_section('jewellery_shop_below_slider_section', array(
		'title'	=> __('Manage Services Section','jewellery-shop'),
		'description'	=> __('<p class="sec-title">Manage Services Section</p> Select Pages from the dropdown for Services.','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_disabled_pgboxes', array(
	   'settings' => 'jewellery_shop_disabled_pgboxes',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label'     => __('Check To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_services_cat', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_services_cat', array(
		'section' => 'jewellery_shop_below_slider_section',
	   'label'     => __('Select Category to display Services','jewellery-shop'),
		'settings'   => 'jewellery_shop_services_cat',
	) ) );

	// service title color
	$wp_customize->add_setting('jewellery_shop_servicetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'jewellery_shop_servicetitle_color', array(
	   'settings' => 'jewellery_shop_servicetitle_color',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label' => __('Title Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// service description color
	$wp_customize->add_setting('jewellery_shop_servicedescription_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_servicedescription_color', array(
	   'settings' => 'jewellery_shop_servicedescription_color',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label' => __('Description Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// service border color
	$wp_customize->add_setting('jewellery_shop_serviceborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_serviceborder_color', array(
	   'settings' => 'jewellery_shop_serviceborder_color',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label' => __('Border Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting( 'jewellery_shop_secondsec_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_secondsec_settings_upgraded_features', array(
	  'type'=> 'hidden',
	  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	      <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
	  'section' => 'jewellery_shop_below_slider_section'
	));

	//Blog post
	$wp_customize->add_section('jewellery_shop_blog_post_settings',array(
        'title' => __('Manage Post Section', 'jewellery-shop'),
        'priority' => null,
        'panel' => 'jewellery_shop_panel_area'
    ) );

	$wp_customize->add_setting('jewellery_shop_metafields_date', array(
	    'default' => true,
	    'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control('jewellery_shop_metafields_date', array(
	    'settings' => 'jewellery_shop_metafields_date', 
	    'section'   => 'jewellery_shop_blog_post_settings',
	    'label'     => __('Check to Enable Date', 'jewellery-shop'),
	    'type'      => 'checkbox',
	));

	$wp_customize->add_setting('jewellery_shop_metafields_comments', array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));	
	$wp_customize->add_control('jewellery_shop_metafields_comments', array(
		'settings' => 'jewellery_shop_metafields_comments',
		'section'  => 'jewellery_shop_blog_post_settings',
		'label'    => __('Check to Enable Comments', 'jewellery-shop'),
		'type'     => 'checkbox',
	));

	$wp_customize->add_setting('jewellery_shop_metafields_author', array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control('jewellery_shop_metafields_author', array(
		'settings' => 'jewellery_shop_metafields_author',
		'section'  => 'jewellery_shop_blog_post_settings',
		'label'    => __('Check to Enable Author', 'jewellery-shop'),
		'type'     => 'checkbox',
	));		

	$wp_customize->add_setting('jewellery_shop_metafields_time', array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control('jewellery_shop_metafields_time', array(
		'settings' => 'jewellery_shop_metafields_time',
		'section'  => 'jewellery_shop_blog_post_settings',
		'label'    => __('Check to Enable Time', 'jewellery-shop'),
		'type'     => 'checkbox',
	));	

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('jewellery_shop_sidebar_post_layout',array(
		'default' => 'right',
		'sanitize_callback' => 'jewellery_shop_sanitize_choices'
	));
	$wp_customize->add_control('jewellery_shop_sidebar_post_layout',array(
		'type' => 'radio',
		'label'     => __('Theme Post Sidebar Position', 'jewellery-shop'),
		'description'   => __('This option work for blog page, archive page and search page.', 'jewellery-shop'),
		'section' => 'jewellery_shop_blog_post_settings',
		'choices' => array(
			'full' => __('Full','jewellery-shop'),
			'left' => __('Left','jewellery-shop'),
			'right' => __('Right','jewellery-shop'),
			'three-column' => __('Three Columns','jewellery-shop'),
			'four-column' => __('Four Columns','jewellery-shop'),
			'grid' => __('Grid Layout','jewellery-shop')
     ),
	) );

	$wp_customize->add_setting('jewellery_shop_blog_post_description_option',array(
    	'default'   => 'Full Content', 
        'sanitize_callback' => 'jewellery_shop_sanitize_choices'
	));
	$wp_customize->add_control('jewellery_shop_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','jewellery-shop'),
        'section' => 'jewellery_shop_blog_post_settings',
        'choices' => array(
            'No Content' => __('No Content','jewellery-shop'),
            'Excerpt Content' => __('Excerpt Content','jewellery-shop'),
            'Full Content' => __('Full Content','jewellery-shop'),
        ),
	) );

	$wp_customize->add_setting('jewellery_shop_blog_post_thumb',array(
        'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('jewellery_shop_blog_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Show / Hide Blog Post Thumbnail', 'jewellery-shop'),
        'section'     => 'jewellery_shop_blog_post_settings',
    ));

    $wp_customize->add_setting( 'jewellery_shop_blog_post_page_image_box_shadow', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'jewellery_shop_sanitize_integer'
    ) );
    $wp_customize->add_control(new Jewellery_Shop_Slider_Custom_Control( $wp_customize, 'jewellery_shop_blog_post_page_image_box_shadow',array(
		'label'	=> esc_html__('Blog Page Image Box Shadow','jewellery-shop'),
		'section'=> 'jewellery_shop_blog_post_settings',
		'settings'=>'jewellery_shop_blog_post_page_image_box_shadow',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	$wp_customize->add_setting( 'jewellery_shop_post_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_post_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
		  'section' => 'jewellery_shop_blog_post_settings'
	));	

	// Footer Section
	$wp_customize->add_section('jewellery_shop_footer', array(
		'title'	=> __('Manage Footer Section','jewellery-shop'),
		'description'	=> __('<p class="sec-title">Manage Footer Section</p>','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_footer_widget', array(
	    'default' => false,
	    'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control('jewellery_shop_footer_widget', array(
	    'settings' => 'jewellery_shop_footer_widget', // Corrected setting name
	    'section'   => 'jewellery_shop_footer',
	    'label'     => __('Check to Enable Footer Widget', 'jewellery-shop'),
	    'type'      => 'checkbox',
	));

	$wp_customize->add_setting('jewellery_shop_footer_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'jewellery_shop_footer_bg_color', array(
        'label'    => __('Footer Background Color', 'jewellery-shop'),
        'section'  => 'jewellery_shop_footer',
    )));

	$wp_customize->add_setting('jewellery_shop_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'jewellery_shop_footer_bg_image',array(
        'label' => __('Footer Background Image','jewellery-shop'),
        'section' => 'jewellery_shop_footer',
    )));

	$wp_customize->add_setting('jewellery_shop_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'jewellery_shop_copyright_line', array(
	   'section' 	=> 'jewellery_shop_footer',
	   'label'	 	=> __('Copyright Line','jewellery-shop'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	$wp_customize->add_setting('jewellery_shop_copyright_link',array(
    	'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'jewellery_shop_copyright_link', array(
	   'section' 	=> 'jewellery_shop_footer',
	   'label'	 	=> __('Copyright Link','jewellery-shop'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

    // FOOTER copyright COLOR
	$wp_customize->add_setting('jewellery_shop_footer_copyright_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_copyright_color', array(
	   'settings' => 'jewellery_shop_footer_copyright_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Copyright Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER copyrightbg COLOR
	$wp_customize->add_setting('jewellery_shop_footer_copyrightbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_copyrightbg_color', array(
	   'settings' => 'jewellery_shop_footer_copyrightbg_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Copyright BG Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER copyrighthrv COLOR
	$wp_customize->add_setting('jewellery_shop_footer_copyrighthrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_copyrighthrv_color', array(
	   'settings' => 'jewellery_shop_footer_copyrighthrv_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Copyright Hover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER heading COLOR
	$wp_customize->add_setting('jewellery_shop_footer_heading_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_heading_color', array(
	   'settings' => 'jewellery_shop_footer_heading_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Heading Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER border COLOR
	$wp_customize->add_setting('jewellery_shop_footer_border_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_border_color', array(
	   'settings' => 'jewellery_shop_footer_border_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Border Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER list COLOR
	$wp_customize->add_setting('jewellery_shop_footer_list_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_list_color', array(
	   'settings' => 'jewellery_shop_footer_list_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('List Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER listhover COLOR
	$wp_customize->add_setting('jewellery_shop_footer_listhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_listhover_color', array(
	   'settings' => 'jewellery_shop_footer_listhover_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Listhover Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	// FOOTER text COLOR
	$wp_customize->add_setting('jewellery_shop_footer_text_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_footer_text_color', array(
	   'settings' => 'jewellery_shop_footer_text_color',
	   'section'   => 'jewellery_shop_footer',
	   'label' => __('Text Color', 'jewellery-shop'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('jewellery_shop_scroll_hide', array(
        'default' => true,
        'sanitize_callback' => 'jewellery_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'jewellery_shop_scroll_hide',array(
        'label'          => __( 'Check To Show Scroll To Top', 'jewellery-shop' ),
        'section'        => 'jewellery_shop_footer',
        'settings'       => 'jewellery_shop_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('jewellery_shop_scroll_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'jewellery_shop_sanitize_choices'
    ));
    $wp_customize->add_control('jewellery_shop_scroll_position',array(
        'type' => 'radio',
        'section' => 'jewellery_shop_footer',
        'label'	 	=> __('Scroll To Top Positions','jewellery-shop'),
        'choices' => array(
            'Right' => __('Right','jewellery-shop'),
            'Left' => __('Left','jewellery-shop'),
            'Center' => __('Center','jewellery-shop')
        ),
    ) );

    $wp_customize->add_setting( 'jewellery_shop_footer_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('jewellery_shop_footer_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/jewellery-wordpress-theme') ." '>Upgrade to Pro</a></span>",
	    'section' => 'jewellery_shop_footer'
	));

    // Google Fonts
    $wp_customize->add_section( 'jewellery_shop_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'jewellery-shop' ),
		'priority'       => 24,
	) );

	$font_choices = array(
		'' => 'select',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Architects Daughter' => 'Architects Daughter',
		'Arsenal' => 'Arsenal',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bitter:400,700,400italic' => 'Bitter',
		'Bangers' => 'Bangers',
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine',
		'Cabin:400,700,400italic' => 'Cabin',
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum',
		'Cookie' => 'Cookie',
		'Chewy' => 'Chewy',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Droid Sans:400,700' => 'Droid Sans',
		'Days One' => 'Days One',
		'Dosis' => 'Dosis',
		'Emilys Candy:' => 'Emilys Candy',
		'Economica' => 'Economica',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Fredoka One' => 'Fredoka One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Montserrat:400,700' => 'Montserrat',
		'Oxygen:400,300,700' => 'Oxygen',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Rokkitt:400' => 'Rokkitt',
		'Raleway:400,700' => 'Raleway',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
	);

	$wp_customize->add_setting( 'jewellery_shop_headings_fonts', array(
		'sanitize_callback' => 'jewellery_shop_sanitize_fonts',
	));
	$wp_customize->add_control( 'jewellery_shop_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'jewellery-shop'),
		'section' => 'jewellery_shop_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'jewellery_shop_body_fonts', array(
		'sanitize_callback' => 'jewellery_shop_sanitize_fonts'
	));
	$wp_customize->add_control( 'jewellery_shop_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'jewellery-shop' ),
		'section' => 'jewellery_shop_google_fonts_section',
		'choices' => $font_choices
	));
}
add_action( 'customize_register', 'jewellery_shop_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jewellery_shop_customize_preview_js() {
	wp_enqueue_script( 'jewellery_shop_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'jewellery_shop_customize_preview_js' );
