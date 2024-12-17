<?php
/*
 * @package Jewellery Shop
 */

function jewellery_shop_admin_enqueue_scripts() {
    wp_enqueue_style( 'jewellery-shop-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'jewellery_shop_admin_enqueue_scripts' );

add_action('after_switch_theme', 'jewellery_shop_options');

function jewellery_shop_options() {
    global $pagenow;
    if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
        wp_redirect( admin_url( 'themes.php?page=jewellery-shop' ) );
        exit;
    }
}

function jewellery_shop_theme_info_menu_link() {

    $jewellery_shop_theme = wp_get_theme();
    add_theme_page(
        sprintf( esc_html__( 'Welcome to %1$s %2$s', 'jewellery-shop' ), $jewellery_shop_theme->get( 'Name' ), $jewellery_shop_theme->get( 'Version' ) ),
        esc_html__( 'Theme Info', 'jewellery-shop' ),'edit_theme_options','jewellery-shop','jewellery_shop_theme_info_page'
    );
}
add_action( 'admin_menu', 'jewellery_shop_theme_info_menu_link' );

function jewellery_shop_theme_info_page() {

    $jewellery_shop_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'jewellery-shop' ), esc_html($jewellery_shop_theme->get( 'Name' )), esc_html($jewellery_shop_theme->get( 'Version' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'jewellery-shop' ); ?>
    </p>
    <div class="important-link">
        <p class="main-box columns-wrapper clearfix">
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e('Pro version of our theme', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you exited for our theme? Then we will proceed for pro version of theme.', 'jewellery-shop' ); ?></p>
                <a class="get-premium" href="<?php echo esc_url( JEWELLERY_SHOP_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'jewellery-shop' ); ?></a>
                <p><strong><?php esc_html_e('Check all classic features', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e('Explore all the premium features.', 'jewellery-shop' ); ?></p>
                <a href="<?php echo esc_url( JEWELLERY_SHOP_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'jewellery-shop' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e('Need Help?', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'jewellery-shop' ); ?></p>
                <a href="<?php echo esc_url( JEWELLERY_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'jewellery-shop' ); ?></a>
                <p><strong><?php esc_html_e('Leave us a review', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'jewellery-shop' ); ?></p>
                <a href="<?php echo esc_url( JEWELLERY_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'jewellery-shop' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e('Check Our Demo', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e('Here, you can view a live demonstration of our premium them.', 'jewellery-shop' ); ?></p>
                <a href="<?php echo esc_url( JEWELLERY_SHOP_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'jewellery-shop' ); ?></a>
                <p><strong><?php esc_html_e('Theme Documentation', 'jewellery-shop' ); ?></strong></p>
                <p><?php esc_html_e('Need more details? Please check our full documentation for detailed theme setup.', 'jewellery-shop' ); ?></p>
                <a href="<?php echo esc_url( JEWELLERY_SHOP_THEME_DOCUMENTATION ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'jewellery-shop' ); ?></a>
            </div>
        </p>
    </div>
    <div id="getting-started">
        <h3><?php printf( esc_html__( 'Getting started with %s', 'jewellery-shop' ),
        esc_html($jewellery_shop_theme->get( 'Name' ))); ?></h3>
        <div class="columns-wrapper clearfix">
            <div class="column column-half clearfix">
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Description', 'jewellery-shop' ); ?></h4>
                    <div class="theme-description-1"><?php echo esc_html($jewellery_shop_theme->get( 'Description' )); ?></div>
                </div>
            </div>
            <div class="column column-half clearfix">
                <img src="<?php echo esc_url( $jewellery_shop_theme->get_screenshot() ); ?>" alt=""/>
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Options', 'jewellery-shop' ); ?></h4>
                    <p class="about">
                    <?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'jewellery-shop' ),esc_html($jewellery_shop_theme->get( 'Name' ))); ?></p>
                    <p>
                    <div class="themelink-1">
                        <a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>"><?php esc_html_e( 'Customize Theme', 'jewellery-shop' ); ?></a>
                        <a class="get-premium" href="<?php echo esc_url( JEWELLERY_SHOP_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Checkout Premium', 'jewellery-shop' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'jewellery-shop' ),
            esc_html($jewellery_shop_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'jewellery-shop' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url( JEWELLERY_SHOP_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'jewellery-shop' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'jewellery-shop' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}
?>
