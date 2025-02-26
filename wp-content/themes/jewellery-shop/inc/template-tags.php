<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Jewellery Shop
 */

if ( ! function_exists( 'jewellery_shop_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function jewellery_shop_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'jewellery_shop_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids 	 = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	wp_reset_postdata();

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function jewellery_shop_categorized_blog() {
	if ( false === ( $jewellery_shop_all_the_cool_cats = get_transient( 'jewellery_shop_all_the_cool_cats' ) ) ) {
		$jewellery_shop_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		$jewellery_shop_all_the_cool_cats = count( $jewellery_shop_all_the_cool_cats );

		set_transient( 'jewellery_shop_all_the_cool_cats', $jewellery_shop_all_the_cool_cats );
	}

	if ( '1' != $jewellery_shop_all_the_cool_cats ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Function that returns if the menu is sticky
 */
if (!function_exists('jewellery_shop_sticky_menu')):
    function jewellery_shop_sticky_menu()
    {
        $is_sticky = get_theme_mod('jewellery_shop_stickyheader', false);

        if ($is_sticky == false):
            return 'not-sticky';
        else:
            return 'is-sticky-on';
        endif;
    }
endif;



/**
 * Flush out the transients used in jewellery_shop_categorized_blog
 */
function jewellery_shop_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'jewellery_shop_all_the_cool_cats' );
}
add_action( 'edit_category', 'jewellery_shop_category_transient_flusher' );
add_action( 'save_post',     'jewellery_shop_category_transient_flusher' );