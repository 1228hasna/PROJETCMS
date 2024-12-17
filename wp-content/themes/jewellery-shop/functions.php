<?php
/**
 * Jewellery Shop functions and definitions
 *
 * @package Jewellery Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'jewellery_shop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function jewellery_shop_setup() {
	global $content_width;
	if ( ! isset( $content_width ) )
		$content_width = 680;

	load_theme_textdomain( 'jewellery-shop', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'custom-header', array(
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jewellery-shop' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/* Starter Content */
		add_theme_support( 'starter-content', array(
			'widgets' => array(
				'footer-1' => array(
					'categories',
				),
				'footer-2' => array(
					'archives',
				),
				'footer-3' => array(
					'meta',
				),
				'footer-4' => array(
					'search',
				),
			),
	    ));

	add_editor_style( 'editor-style.css' );
}
endif; // jewellery_shop_setup
add_action( 'after_setup_theme', 'jewellery_shop_setup' );

function jewellery_shop_the_breadcrumb() {
    echo '<div class="breadcrumb my-3">';

    if (!is_home()) {
        echo '<a class="home-main align-self-center" href="' . esc_url(home_url()) . '">';
        bloginfo('name');
        echo "</a>";

        if (is_category() || is_single()) {
            the_category(' , ');
            if (is_single()) {
                echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
            }
        } elseif (is_page()) {
            echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
        }
    }

    echo '</div>';
}

function jewellery_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jewellery-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'jewellery-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'jewellery-shop' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'jewellery-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'jewellery-shop' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'jewellery-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'jewellery-shop' ),
		'description'   => __( 'Appears on shop page', 'jewellery-shop' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar(array(
        'name'          => __('Single Product Sidebar', 'jewellery-shop'),
        'description'   => __('Sidebar for single product pages', 'jewellery-shop'),
		'id'            => 'woocommerce-single-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'jewellery-shop' ),
		'description'   => __( 'Appears on footer', 'jewellery-shop' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'jewellery-shop' ),
		'description'   => __( 'Appears on footer', 'jewellery-shop' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'jewellery-shop' ),
		'description'   => __( 'Appears on footer', 'jewellery-shop' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'jewellery-shop' ),
		'description'   => __( 'Appears on footer', 'jewellery-shop' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'jewellery_shop_widgets_init' );

// Change number of products per row to 3
add_filter('loop_shop_columns', 'jewellery_shop_loop_columns');
if (!function_exists('jewellery_shop_loop_columns')) {
    function jewellery_shop_loop_columns() {
        $colm = get_theme_mod('jewellery_shop_products_per_row', 3); // Default to 3 if not set
        return $colm;
    }
}

// Use the customizer setting to set the number of products per page
function jewellery_shop_products_per_page($cols) {
    $cols = get_theme_mod('jewellery_shop_products_per_page', 9); // Default to 9 if not set
    return $cols;
}
add_filter('loop_shop_per_page', 'jewellery_shop_products_per_page', 9);

function jewellery_shop_scripts() {
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri())."/css/bootstrap.css" );
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri())."/css/owl.carousel.css" );
	wp_enqueue_style( 'jewellery-shop-basic-style', get_stylesheet_uri() );
	wp_style_add_data('jewellery-shop-basic-style', 'rtl', 'replace');
	wp_enqueue_style( 'jewellery-shop-responsive', esc_url(get_template_directory_uri())."/css/responsive.css" );
	wp_enqueue_style( 'jewellery-shop-default', esc_url(get_template_directory_uri())."/css/default.css" );
	wp_enqueue_script( 'owl.carousel-js', esc_url(get_template_directory_uri()). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jewellery-shop-theme', esc_url(get_template_directory_uri()) . '/js/theme.js' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/css/fontawesome-all.css" );

	require get_parent_theme_file_path( '/inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'jewellery-shop-basic-style',$jewellery_shop_color_scheme_css );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// font-family
	$headings_font = esc_html(get_theme_mod('jewellery_shop_headings_fonts'));
	$body_font = esc_html(get_theme_mod('jewellery_shop_body_fonts'));

	if ($headings_font) {
	    wp_enqueue_style('jewellery-shop-headings-fonts', 'https://fonts.googleapis.com/css?family=' . $headings_font);
	} else {
	    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}

	if ($body_font) {
	    wp_enqueue_style('jewellery-shop-body-fonts', 'https://fonts.googleapis.com/css?family=' . $body_font);
	} else {
	    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}

}
add_action( 'wp_enqueue_scripts', 'jewellery_shop_scripts' );

// Footer Link
define('JEWELLERY_SHOP_FOOTER_LINK',__('https://www.theclassictemplates.com/products/free-jewellery-wordpress-theme','jewellery-shop'));

require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme Info Page.
 */
require get_template_directory() . '/inc/addon.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/upgrade-to-pro.php';

// select
require get_template_directory() . '/inc/select/category-dropdown-custom-control.php';


if ( ! defined( 'JEWELLERY_SHOP_THEME_PAGE' ) ) {
define('JEWELLERY_SHOP_THEME_PAGE',__('https://www.theclassictemplates.com/collections/best-wordpress-templates','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_SUPPORT' ) ) {
define('JEWELLERY_SHOP_SUPPORT',__('https://wordpress.org/support/theme/jewellery-shop','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_REVIEW' ) ) {
define('JEWELLERY_SHOP_REVIEW',__('https://wordpress.org/support/theme/jewellery-shop/reviews/#new-post','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_PRO_DEMO' ) ) {
define('JEWELLERY_SHOP_PRO_DEMO',__('https://live.theclassictemplates.com/demo/jewellery-shop','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_PREMIUM_PAGE' ) ) {
define('JEWELLERY_SHOP_PREMIUM_PAGE',__('https://www.theclassictemplates.com/products/jewellery-wordpress-theme','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_THEME_DOCUMENTATION' ) ) {
define('JEWELLERY_SHOP_THEME_DOCUMENTATION',__('https://live.theclassictemplates.com/demo/docs/jewellery-shop-free/','jewellery-shop'));
}

if ( ! function_exists( 'jewellery_shop_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function jewellery_shop_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

//sanitize number field
function jewellery_shop_sanitize_number_absint( $number, $setting ) {
  // Ensure $number is an absolute integer (whole number, zero or greater).
  $number = absint( $number );

  // If the input is an absolute integer, return it; otherwise, return the default
  return ( $number ? $number : $setting->default );
}

/*radio button sanitization*/
function jewellery_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

if ( ! function_exists( 'jewellery_shop_sanitize_integer' ) ) {
	function jewellery_shop_sanitize_integer( $input ) {
		return (int) $input;
	}
}
