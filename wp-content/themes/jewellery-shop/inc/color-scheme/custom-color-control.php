<?php

$jewellery_shop_first_color = get_theme_mod('jewellery_shop_first_color');
$jewellery_shop_color_scheme_css = '';

/*------------------ Global First Color -----------*/
$jewellery_shop_color_scheme_css .='.site-main .wp-block-button__link, .postsec-list .wp-block-button__link, .slider-img-color, .postsec-list input.search-submit, .nav-links .page-numbers, input.search-submit, .tagcloud a:hover, .page-links a, .page-links span, 
nav.woocommerce-MyAccount-navigation ul li, .breadcrumb a, button.wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button.contained{';
    $jewellery_shop_color_scheme_css .='background-color: '.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='.info, .banner-btn a,.pagemore a,.serv-btn a,.woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submit, #button, #sidebar input.search-submit, #footer input.search-submit, form.woocommerce-product-search button, .widget_calendar caption, .widget_calendar #today, #footer input.search-submit, .bg-opacity{';
    $jewellery_shop_color_scheme_css .='background: '.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='.postsec-list .wp-block-button.is-style-outline a, .main-nav a:hover, #sidebar ul li::before, #sidebar .widget a:active, #sidebar li a:hover, #footer li a:hover, .postmeta a:hover {';
    $jewellery_shop_color_scheme_css .='color: '.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='.site-main .wp-block-button.is-style-outline a, .postsec-list .wp-block-button.is-style-outline a, .widget .tagcloud a:hover{';
    $jewellery_shop_color_scheme_css .='border: 1px solid'.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='#sidebar input[type="text"], #sidebar input[type="search"], #footer input[type="search"], nav.woocommerce-MyAccount-navigation ul li {';
    $jewellery_shop_color_scheme_css .='border: 2px solid'.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='.main-nav li ul{';
    $jewellery_shop_color_scheme_css .='border-top: 3px solid'.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='#sidebar .widget{';
    $jewellery_shop_color_scheme_css .='border-bottom: 3px solid'.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='.tagcloud a:hover{';
    $jewellery_shop_color_scheme_css .='border-color: '.esc_attr($jewellery_shop_first_color).'!important;';
$jewellery_shop_color_scheme_css .='}';

$jewellery_shop_color_scheme_css .='
@media screen and (max-width:1000px) {
    .toggle-nav button, .sidenav {';
    $jewellery_shop_color_scheme_css .='background: '.esc_attr($jewellery_shop_first_color).' !important;';
$jewellery_shop_color_scheme_css .='} }';  

//---------------------------------Logo-Max-height--------- 
$jewellery_shop_logo_width = get_theme_mod('jewellery_shop_logo_width');

if($jewellery_shop_logo_width != false){

$jewellery_shop_color_scheme_css .='.logo .custom-logo-link img{';

    $jewellery_shop_color_scheme_css .='width: '.esc_html($jewellery_shop_logo_width).'px;';

$jewellery_shop_color_scheme_css .='}';
}

/*---------------------------Slider Height ------------*/

$jewellery_shop_slider_img_height = get_theme_mod('jewellery_shop_slider_img_height');
if($jewellery_shop_slider_img_height != false){
    $jewellery_shop_color_scheme_css .='.slidesection img{';
        $jewellery_shop_color_scheme_css .='height: '.esc_attr($jewellery_shop_slider_img_height).' !important;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Footer background image -------------------*/

$jewellery_shop_footer_bg_image = get_theme_mod('jewellery_shop_footer_bg_image');
if($jewellery_shop_footer_bg_image != false){
    $jewellery_shop_color_scheme_css .='.footer-widget{';
        $jewellery_shop_color_scheme_css .='background: url('.esc_attr($jewellery_shop_footer_bg_image).')!important;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Footer Background Color -------------------*/

$jewellery_shop_footer_bg_color = get_theme_mod('jewellery_shop_footer_bg_color');
if($jewellery_shop_footer_bg_color != false){
    $jewellery_shop_color_scheme_css .='.footer-widget{';
        $jewellery_shop_color_scheme_css .='background-color: '.esc_attr($jewellery_shop_footer_bg_color).' !important;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Scroll to top positions -------------------*/

$jewellery_shop_scroll_position = get_theme_mod( 'jewellery_shop_scroll_position','Right');
if($jewellery_shop_scroll_position == 'Right'){
    $jewellery_shop_color_scheme_css .='#button{';
        $jewellery_shop_color_scheme_css .='right: 20px;';
    $jewellery_shop_color_scheme_css .='}';
}else if($jewellery_shop_scroll_position == 'Left'){
    $jewellery_shop_color_scheme_css .='#button{';
        $jewellery_shop_color_scheme_css .='left: 20px;';
    $jewellery_shop_color_scheme_css .='}';
}else if($jewellery_shop_scroll_position == 'Center'){
    $jewellery_shop_color_scheme_css .='#button{';
        $jewellery_shop_color_scheme_css .='right: 50%;left: 50%;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Blog Post Page Image Box Shadow -------------------*/

$jewellery_shop_blog_post_page_image_box_shadow = get_theme_mod('jewellery_shop_blog_post_page_image_box_shadow',0);
if($jewellery_shop_blog_post_page_image_box_shadow != false){
    $jewellery_shop_color_scheme_css .='.post-thumb img{';
        $jewellery_shop_color_scheme_css .='box-shadow: '.esc_attr($jewellery_shop_blog_post_page_image_box_shadow).'px '.esc_attr($jewellery_shop_blog_post_page_image_box_shadow).'px '.esc_attr($jewellery_shop_blog_post_page_image_box_shadow).'px #cccccc;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$jewellery_shop_woo_product_img_border_radius = get_theme_mod('jewellery_shop_woo_product_img_border_radius');
if($jewellery_shop_woo_product_img_border_radius != false){
    $jewellery_shop_color_scheme_css .='.woocommerce ul.products li.product a img{';
        $jewellery_shop_color_scheme_css .='border-radius: '.esc_attr($jewellery_shop_woo_product_img_border_radius).'px;';
    $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Shop page pagination -------------------*/

$jewellery_shop_wooproducts_nav = get_theme_mod('jewellery_shop_wooproducts_nav', 'Yes');
if($jewellery_shop_wooproducts_nav == 'No'){
  $jewellery_shop_color_scheme_css .='.woocommerce nav.woocommerce-pagination{';
    $jewellery_shop_color_scheme_css .='display: none;';
  $jewellery_shop_color_scheme_css .='}';
}

/*--------------------------- Related Product -------------------*/

$jewellery_shop_related_product_enable = get_theme_mod('jewellery_shop_related_product_enable',true);
if($jewellery_shop_related_product_enable == false){
  $jewellery_shop_color_scheme_css .='.related.products{';
    $jewellery_shop_color_scheme_css .='display: none;';
  $jewellery_shop_color_scheme_css .='}';
}    

/*--------------------------- Woocommerce Product Sale Position -------------------*/    

$jewellery_shop_product_sale_position = get_theme_mod( 'jewellery_shop_product_sale_position','Left');
if($jewellery_shop_product_sale_position == 'Right'){
    $jewellery_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale{';
        $jewellery_shop_color_scheme_css .='left:auto !important; right:.5em !important;';
    $jewellery_shop_color_scheme_css .='}';
}else if($jewellery_shop_product_sale_position == 'Left'){
    $jewellery_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale {';
        $jewellery_shop_color_scheme_css .='right:auto !important; left:.5em !important;';
    $jewellery_shop_color_scheme_css .='}';
}        
