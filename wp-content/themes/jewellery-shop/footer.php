<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Jewellery Shop
 */
?>
<div id="footer">
  <?php 
    $jewellery_shop_footer_widget_enabled = get_theme_mod('jewellery_shop_footer_widget', false);
    
    if ($jewellery_shop_footer_widget_enabled) { ?>
        <div class="footer-widget">
          <div class="container">
            <?php dynamic_sidebar('footer-1'); ?>
            <?php dynamic_sidebar('footer-2'); ?>
            <?php dynamic_sidebar('footer-3'); ?>
            <?php dynamic_sidebar('footer-4'); ?>
          </div>
        </div>
    <?php } ?>
    
  <div class="clear"></div>

  <div class="copywrap text-center">
    <div class="container">
      <p>
        <a href="<?php 
          $jewellery_shop_copyright_link = get_theme_mod('jewellery_shop_copyright_link', '');
          if (empty($jewellery_shop_copyright_link)) {
              echo esc_url(JEWELLERY_SHOP_FOOTER_LINK);
          } else {
              echo esc_url($jewellery_shop_copyright_link);
          } ?>" target="_blank">
          <?php echo esc_html(get_theme_mod('jewellery_shop_copyright_line', __('Jewellery WordPress Theme', 'jewellery-shop'))); ?>
        </a> 
        <?php echo esc_html('By Classic Templates', 'jewellery-shop'); ?>
      </p>
    </div>
  </div>
  
</div>

<?php if(get_theme_mod('jewellery_shop_scroll_hide',true)){ ?>
   <a id="button"><?php esc_html_e('TOP', 'jewellery-shop'); ?></a>
  <?php } ?>
  
<?php wp_footer(); ?>
</body>
</html>