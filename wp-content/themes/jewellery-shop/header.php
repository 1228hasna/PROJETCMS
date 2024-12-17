<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Jewellery Shop
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('jewellery_shop_preloader', true) != "") { ?>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'jewellery-shop' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'jewellery_shop_box_layout', false) != "" ) { echo 'class="boxlayout"'; } ?>>

  <div class="header <?php echo esc_attr(jewellery_shop_sticky_menu()); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 center-align align-self-center">
          <div class="logo py-2 py-md-0 py-sm-0">
            <?php jewellery_shop_the_custom_logo(); ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( get_theme_mod('jewellery_shop_title_enable',true) != "") { ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
              <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
              <?php } ?>
              <?php endif; ?>
             <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <?php if ( get_theme_mod('jewellery_shop_tagline_enable',false) != "") { ?>
                <span class="site-description"><?php echo esc_html( $description ); ?></span>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-3 center-align align-self-center">
          <div class="toggle-nav text-center">
            <button role="tab"><?php esc_html_e('MENU','jewellery-shop'); ?></button>
          </div>
          <div id="mySidenav" class="nav sidenav text-end">
            <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','jewellery-shop' ); ?>">
              <?php 
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) );
               ?>
              <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','jewellery-shop'); ?></a>
            </nav>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 center-align align-self-center">
          <?php if ( get_theme_mod('jewellery_shop_phone_number') != "" || get_theme_mod('jewellery_shop_email_address') != "") { ?>
            <div class="info">
              <?php if ( get_theme_mod('jewellery_shop_phone_number') != "") { ?>
                <a class="phntxt" href="tel:<?php echo esc_url( get_theme_mod('jewellery_shop_phone_number','' )); ?>"><i class="fas fa-phone me-2"></i><?php echo esc_html(get_theme_mod ('jewellery_shop_phone_number','')); ?></a>
              <?php }?>
              <?php if ( get_theme_mod('jewellery_shop_email_address') != "") { ?>
                <a class="emailtxt mb-0" href="mailto:<?php echo esc_attr( get_theme_mod('jewellery_shop_email_address','') ); ?>"><i class="far fa-envelope me-2"></i><?php echo esc_html(get_theme_mod ('jewellery_shop_email_address','')); ?></a>
              <?php }?>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  <?php if ( get_theme_mod('jewellery_shop_headerborder_enable',true) != "") { ?>
    <div class="shape"></div>
  <?php } ?>
