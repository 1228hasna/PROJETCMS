<?php
/**
 * @package Jewellery Shop
 * Setup the WordPress core custom header feature.
 *
 * @uses jewellery_shop_header_style()
 */
function jewellery_shop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'jewellery_shop_custom_header_args', array(		
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 280,
		'wp-head-callback'       => 'jewellery_shop_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'jewellery_shop_custom_header_setup' );

if ( ! function_exists( 'jewellery_shop_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see jewellery_shop_custom_header_setup().
 */
function jewellery_shop_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	



	h1.site-title a, p.site-title a  {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sitetitle_color')); ?>;
	}

	span.site-description {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sitetagline_color')); ?>;
	}




	.header {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_headerbg_color')); ?>;
	}

	.info {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_headerrightcontactbox_color')); ?>;
	}

	.info .fa-phone {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headerphoneicon_color')); ?>;
	}

	.info .phntxt {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headerphonetext_color')); ?>;
	}

	.info .fa-envelope {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headeremailicon_color')); ?>;
	}

	.info .emailtxt {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headeremailtext_color')); ?>;
	}

	.main-nav a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headermenu_color')); ?>;
	}

	.main-nav a:hover, .current_page_item a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headermenuhrv_color')); ?>;
	}

	.main-nav ul ul a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headersubmenu_color')); ?>;
	}

	.main-nav ul ul a:hover {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headersubmenuhrv_color')); ?>;
	}

	.main-nav ul ul {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_headersubmenubg_color')); ?>;
	}

	.main-nav ul ul li {
		border-color: <?php echo esc_attr(get_theme_mod('jewellery_shop_headersubmenubgbrd_color')); ?>;
	}



	.bg-opacity {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderleftbg_color')); ?>;
	}

	.slider-box i {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_slidericon_color')); ?>;
	}
	.slider-box h1 {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_slidertitle_color')); ?>;
	}

	.slider-box p {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderdescription_color')); ?>;
	}

	.slide-btn a {
		border-color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderbuttonborder_color')); ?>;
	}

	.slide-btn a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderbuttontext_color')); ?>;
	}

	.slide-btn a:hover {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderbuttonhover_color')); ?>;
	}

	.slide-btn a:hover {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_sliderbuttontexthover_color')); ?>;
	}

	.services_inner_box h2 a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_servicetitle_color')); ?>;
	}

	.services_inner_box p {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_servicedescription_color')); ?>;
	}

	.services_inner_box:before, .services_inner_box:after {
		border-color: <?php echo esc_attr(get_theme_mod('jewellery_shop_serviceborder_color')); ?>;
	}

	#footer {
		background: <?php echo esc_attr(get_theme_mod('jewellery_shop_footerbg_color')); ?>;
	}

	.copywrap a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_copyright_color')); ?>;
	}

	.copywrap {
		background-color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_copyrightbg_color')); ?>;
	}

	.copywrap a:hover {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_copyrighthrv_color')); ?>;
	}

	.ftr-4-box h3, .ftr-4-box h2 {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_heading_color')); ?>;
	}

	.ftr-4-box h3, .ftr-4-box h2 {
		border-color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_border_color')); ?>;
	}

	.ftr-4-box ul li a, .ftr-4-box a {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_list_color')); ?>;
	}

	.ftr-4-box a:hover {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_listhover_color')); ?>;
	}

	.ftr-4-box p {
		color: <?php echo esc_attr(get_theme_mod('jewellery_shop_footer_text_color')); ?>;
	}

	</style>
	<?php 
}
endif;