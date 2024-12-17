 <?php

$jeweller_store_custom_css = '';


$jeweller_store_is_dark_mode_enabled = get_theme_mod( 'jeweller_store_is_dark_mode_enabled', false );

if ( $jeweller_store_is_dark_mode_enabled ) {

    $jeweller_store_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2) {';
    $jeweller_store_custom_css .= 'background: #000;';
    $jeweller_store_custom_css .= '}';

    $jeweller_store_custom_css .= '.some {';
    $jeweller_store_custom_css .= 'background: #000 !important;';
    $jeweller_store_custom_css .= '}';

	$jeweller_store_custom_css .= '.sticky .post-content,.offcanvas .sidebar-area li a,.offcanvas .sidebar-area li,.offcanvas p{';
    $jeweller_store_custom_css .= 'color: #000';
    $jeweller_store_custom_css .= '}';

	$jeweller_store_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a{';
    $jeweller_store_custom_css .= 'color: #000 !important';
    $jeweller_store_custom_css .= '}';

    $jeweller_store_custom_css .= '.some{';
    $jeweller_store_custom_css .= 'background: #fff;';
    $jeweller_store_custom_css .= '}';

    $jeweller_store_custom_css .= '.some {';
    $jeweller_store_custom_css .= 'background: #fff !important;';
    $jeweller_store_custom_css .= '}';
	

    $jeweller_store_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span{';
    $jeweller_store_custom_css .= 'color: #fff;';
    $jeweller_store_custom_css .= '}';

    $jeweller_store_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular, #main-menu ul li.current-menu-item > a, #main-menu ul li.current_page_item > a,#main-menu li:hover > a{';
    $jeweller_store_custom_css .= 'color: #fff !important;';
    $jeweller_store_custom_css .= '}';

	$jeweller_store_custom_css .= '.post-box{';
    $jeweller_store_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $jeweller_store_custom_css .= '}';
}

/*---------------------------text-transform-------------------*/

$jeweller_store_text_transform = get_theme_mod( 'menu_text_transform_jeweller_store','UPPERCASE');

if($jeweller_store_text_transform == 'CAPITALISE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: capitalize ;';

	$jeweller_store_custom_css .='}';

}else if($jeweller_store_text_transform == 'UPPERCASE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: uppercase ;';

	$jeweller_store_custom_css .='}';

}else if($jeweller_store_text_transform == 'LOWERCASE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: lowercase ;';

	$jeweller_store_custom_css .='}';
}

	/*---------------------------menu-zoom-------------------*/

		$jeweller_store_menu_zoom = get_theme_mod( 'jeweller_store_menu_zoom','None');

    if($jeweller_store_menu_zoom == 'None'){

		$jeweller_store_custom_css .='#main-menu ul li a{';

			$jeweller_store_custom_css .='';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_menu_zoom == 'Zoominn'){

		$jeweller_store_custom_css .='#main-menu ul li a:hover{';

			$jeweller_store_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #b2905f;';

		$jeweller_store_custom_css .='}';
	}

/*---------------------------Container Width-------------------*/

$jeweller_store_container_width = get_theme_mod('jeweller_store_container_width');

	$jeweller_store_custom_css .='body{';

		$jeweller_store_custom_css .='width: '.esc_attr($jeweller_store_container_width).'%; margin: auto;';

	$jeweller_store_custom_css .='}';

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$jeweller_store_scroll_top_position = get_theme_mod( 'jeweller_store_scroll_top_position','Right');

	if($jeweller_store_scroll_top_position == 'Right'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='right: 20px;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_scroll_top_position == 'Left'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='left: 20px;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_scroll_top_position == 'Center'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='right: 50%;left: 50%;';

		$jeweller_store_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$jeweller_store_pagination_setting = get_theme_mod('jeweller_store_pagination_setting',true);

	if($jeweller_store_pagination_setting == false){

		$jeweller_store_custom_css .='.nav-links{';

			$jeweller_store_custom_css .='display: none;';

		$jeweller_store_custom_css .='}';
	}

	/*---------------------------related Product Settings-------------------*/


$jeweller_store_related_product_setting = get_theme_mod('jeweller_store_related_product_setting',true);

	if($jeweller_store_related_product_setting == false){

		$jeweller_store_custom_css .='.related.products, .related h2{';

			$jeweller_store_custom_css .='display: none;';

		$jeweller_store_custom_css .='}';
	}

	/*---------------------------Copyright Text alignment-------------------*/

$jeweller_store_copyright_text_alignment = get_theme_mod( 'jeweller_store_copyright_text_alignment','LEFT-ALIGN');

 if($jeweller_store_copyright_text_alignment == 'LEFT-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:left;';

		$jeweller_store_custom_css .='}';


	}else if($jeweller_store_copyright_text_alignment == 'CENTER-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:center;';

		$jeweller_store_custom_css .='}';


	}else if($jeweller_store_copyright_text_alignment == 'RIGHT-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:right;';

		$jeweller_store_custom_css .='}';

	}

	/*--------------------------- Slider Opacity -------------------*/

	$jeweller_store_slider_opacity_color = get_theme_mod( 'jeweller_store_slider_opacity_color','0.3');

	if($jeweller_store_slider_opacity_color == '0'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.1'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.1';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.2'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.2';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.3'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.3';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.4'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.4';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.5'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.5';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.6'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.6';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.7'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.7';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.8'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.8';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.9'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.9';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == 'unset'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:unset';

		$jeweller_store_custom_css .='}';

		}
	
	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$jeweller_store_woocommerce_pagination_position = get_theme_mod( 'jeweller_store_woocommerce_pagination_position','Center');

	if($jeweller_store_woocommerce_pagination_position == 'Left'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: left;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_woocommerce_pagination_position == 'Center'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: center;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_woocommerce_pagination_position == 'Right'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: right;';

		$jeweller_store_custom_css .='}';
	}

