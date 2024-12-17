<?php
add_action("init","goldy_jewelry_hook",12);
function goldy_jewelry_hook(){

	// add read-more button in Our Portfolio

	remove_action('goldy_our_portfolio_loop','goldy_mex_our_portfolio_loop',5);

	add_action('goldy_our_portfolio_loop','goldy_jewelry_our_portfolio_loop',5);
	function goldy_jewelry_our_portfolio_loop($info_item){
	?>
	
	<div class="protfolio_img_main">
		<div class="protfolio_images">
			<?php if(!empty( $info_item['image'])){ ?>
				<img src="<?php echo esc_url($info_item['image']); ?>" alt="The Last of us">
			<?php }else{
				?>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"> 
				<?php
			} 
			?>
		</div>
	</div>
	<h3><?php echo $info_item['title'];?></h3>
	<div class="our_port_containe">
		<div class="our_portfolio_title">
			<i class="fa fa-window-minimize" aria-hidden="true"></i>
			<p><?php //echo $info_item->subtitle; ?></p>
			<p class="our_portfolio_desc"><?php echo wp_kses_post($info_item['text']); ?></p>
		</div>	
		<div class="our_portfolio_btn">
		<?php if(!empty($info_item['link_url'])){ ?>
			<a href="<?php echo $info_item['link_url']; ?>">
				
				 <?php _e('Read More', 'goldy-jewelry') ?><i class="fa fa-arrow-right"></i> 

			</a>
		<?php } ?>
		</div>
	</div>
	<?php
	}

	// change HTML Our Testimonial   

	remove_action('goldy_our_testimonial_loop','goldy_mex_our_testimonial_loop',5);

	add_action('goldy_our_testimonial_loop','goldy_jewelry_our_testimonial_loop',5);
	function goldy_jewelry_our_testimonial_loop($info_item){
	?>
	<div class="our_testimonial_data_info">
		<!-- <div class="our_testimonial_icon">
	  		<i class="fa fa-quote-left"></i>
		</div> -->
	<div class="testimonials_center_border"></div>
		<div class="testimonials_content">
			<div class="our_testimonials_container">
				<div class="testimonials_image">
					<div class="image_testimonials">
						<?php
						if(!empty($info_item['image'])){
							?>
							<img src="<?php echo esc_url($info_item['image']);  ?>" alt="">
							<?php
						}else{
							?>
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="">								
							<?php
						}
						?>
					</div>
				</div>
				<div class="testimonials_title">
					<h3><?php echo esc_html($info_item['title']) ?></h3>
					<h4><?php echo  esc_attr($info_item['subtitle']) ?></h4>
				</div>
			</div>
			<div class="testinomial_description">
				<p><?php echo wp_kses_post($info_item['text']) ?></p>
			</div>
			
		</div>												
	</div>
	<?php
	}

	// change header design
	remove_action("goldy_header_topbar_loop",'goldy_mex_header_topbar_loop',5);

	add_action("goldy_header_topbar_loop",'goldy_jewelry_header_topbar_loop',5);
	function goldy_jewelry_header_topbar_loop($goldy_mex_default){
	?>
		<div class="header_top_bar">
			<?php if(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'])){ ?>
			<?php if(!empty(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time']))){ ?>
					<div class="opening_time_data">
						<div class="opening_icon">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="opening_info">
							<a href="<?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?></p></a>
						</div>
					</div>
					
			<?php } } ?>
			<?php if(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'])){ ?>
			<?php if(!empty(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number']))){ ?>
					<div class="contact_data">
						<div class="contact_icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="contact_info">
							<a href="tel:<?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?></p></a>
						</div>
					</div>
					
			<?php } } 
			if(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )){
				if(!empty(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] ))){ ?>
				<div class="email_data">
					<div class="email_icon">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="email_info">
						<a href="mailto:<?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?></p></a>
					</div>
				</div>
			<?php } 
		}?>
		</div>

		<div class="site-branding">
				<?php
				the_custom_logo();
				?>
				<div class="header_logo">
					<?php
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					endif;
					$sharp_tian_description = get_bloginfo( 'description', 'display' );
					if ( $sharp_tian_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html($sharp_tian_description); ?></p>
					<?php endif; ?>
				</div>
			</div><!-- .site-branding -->

		<?php
	}


	remove_action('goldy_main_header_loop','goldy_mex_main_header_loop',5); 
	add_action('goldy_main_header_loop','goldy_jewelry_main_header_loop',5); 
	function goldy_jewelry_main_header_loop($goldy_mex_default){
	?>
		<div class="header_info">
			<div class="menu_call_button">
				<div class="call_button_info">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" id="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="fa fa-bars"></i>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>							
					</nav>
					<div class="mobile_menu main-navigation" id="mobile_primary">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
						<button class="menu-toggle" id="mobilepop"  aria-expanded="false">
							<i class="fa fa-close"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="header_social_icon">
		<?php 
		if(get_theme_mod( 'goldy_mex_display_social_icon',$goldy_mex_default['options']['goldy_mex_display_social_icon']) != ''){ 
			?>
				<div class="social_icon_info">
					<div class="social_data">
						<?php 
						$social_icon_section_content  = get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']);
						if ( ! empty( $social_icon_section_content ) ) {
							// $social_icon_section_content = json_decode( $social_icon_section_content );
							foreach ( $social_icon_section_content as $info_item ) {
								if(get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']) != ''){
									if(!empty($info_item['link_url'])){
									?>
									<a class="social_icon" href="<?php echo esc_attr($info_item['link_url']);?>" target="_blank">
										<i class="fa <?php echo esc_attr($info_item['icon_value']);?>"></i>
									</a>
									<?php
									}
								}
							}
						} ?>
					</div>
				</div>
			
			<?php 
			}
		?>
		</div>

		</div>
	<?php
	}

}
