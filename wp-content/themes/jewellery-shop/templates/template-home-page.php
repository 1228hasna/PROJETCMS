<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Jewellery Shop
 */

get_header(); ?>

<div id="content">
  <?php
    $jewellery_shop_hidcatslide = get_theme_mod('jewellery_shop_hide_categorysec', false);
    $jewellery_shop_slidersection = get_theme_mod('jewellery_shop_slidersection');

    if ($jewellery_shop_hidcatslide && $jewellery_shop_slidersection) { ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('jewellery_shop_slidersection',false) ) { ?>
            <?php $jewellery_shop_queryvar = new WP_Query(
              array( 
                'cat' => esc_attr(get_theme_mod('jewellery_shop_slidersection',false)),
                'posts_per_page' => esc_attr(get_theme_mod('jewellery_shop_slider_count',false))
              )
            );
            while( $jewellery_shop_queryvar->have_posts() ) : $jewellery_shop_queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail('full');
                  } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt=""/>
                <?php } ?>
                <div class="bg-opacity"></div>
                <div class="slider-box">
                  <p><i class="far fa-gem"></i></p>
                  <h1><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?></a></h1>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 15 );
                    echo '<p class="mt-4">' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                  <div class="slide-btn mt-5">
                    <?php 
                    $jewellery_shop_button_text = get_theme_mod('jewellery_shop_button_text', 'Read More');
                    $jewellery_shop_button_link_slider = get_theme_mod('jewellery_shop_button_link_slider', ''); 
                    if (empty($jewellery_shop_button_link_slider)) {
                        $jewellery_shop_button_link_slider = get_permalink();
                    }
                    if ($jewellery_shop_button_text || !empty($jewellery_shop_button_link_slider)) { ?>
                      <?php if(get_theme_mod('jewellery_shop_button_text', 'Read More') != ''){ ?>
                        <a href="<?php echo esc_url($jewellery_shop_button_link_slider); ?>">
                          <?php echo esc_html($jewellery_shop_button_text); ?>
                            <span class="screen-reader-text"><?php echo esc_html($jewellery_shop_button_text); ?></span>
                        </a>
                      <?php } ?>
                    <?php } ?>
                  </div>

                  <!-- <?php if ( get_theme_mod('jewellery_shop_button_text', 'Read More') != "" && get_theme_mod('jewellery_shop_button_link_slider') != '') { ?>
                    <div class="slide-btn mt-5">
                      <a href="<?php echo esc_url(get_theme_mod('jewellery_shop_button_link_slider','')); ?>"><?php echo esc_html(get_theme_mod('jewellery_shop_button_text',__('Read More','jewellery-shop'))); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('jewellery_shop_button_text',__('Read More','jewellery-shop'))); ?></span></a>
                    </div>
                  <?php }?> -->
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <?php
    $jewellery_shop_hidepageboxes = get_theme_mod('jewellery_shop_disabled_pgboxes',false);
    $jewellery_shop_services_cat = get_theme_mod('jewellery_shop_services_cat');
    if( $jewellery_shop_hidepageboxes && $jewellery_shop_services_cat){
  ?>
  <section id="serives_box" class="py-4">
    <div class="container">
      <div class="row">
        <?php if( get_theme_mod('jewellery_shop_services_cat',false) ) { ?>
          <?php $jewellery_shop_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('jewellery_shop_services_cat',false)));
            while( $jewellery_shop_queryvar->have_posts() ) : $jewellery_shop_queryvar->the_post(); ?>
              <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                <div class="services_inner_box text-center p-4">
                  <?php the_post_thumbnail( 'full' ); ?>
                  <h2 class="py-3 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 10 );
                    echo '<p class="mb-0">' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        <?php }?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>