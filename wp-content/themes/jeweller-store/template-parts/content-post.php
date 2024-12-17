<?php
  global $post;

  $jeweller_store_classes2 = array(
    'post-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($jeweller_store_classes2); ?>>
  <div class="post-content">
    <?php
      the_content();
      the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','jeweller-store').'</strong> ', ', ', '</div>');
    ?>
  </div>
</div>