<?php
  global $post;

  $jeweller_store_classes1 = array(
    'page-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($jeweller_store_classes1); ?>>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>