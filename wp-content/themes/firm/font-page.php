<?php
/* 
*Template Name: Front Page
*/
get_header();
?>
<div id="homepage">
	<div id="slider">
		<div class="owl-carousel owl-theme">
		    <div class="slider_inner"> 
		    	<div class="slider_img">
		    		<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_slider_one_image')); ?>"
		    		>
		    	</div>
		    	<div class="slider_content">
		    		<div class="slider_title">
		    			<?php echo get_theme_mod( 'fbs_home_slider_one_title'); ?>
		    		</div>
		    		<div class="slider_desc">
		    			<?php echo get_theme_mod( 'fbs_home_slider_one_description'); ?>
		    		</div>
		    		<a class="fbs_content_button white" href="<?php echo get_theme_mod('fbs_home_slider_one_link'); ?>">Read More</a>
		    	</div>
		    </div>

		    <div class="slider_inner"> 
		    	<div class="slider_img">
		    		<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_slider_two_image')); ?>"
		    		>
		    	</div>
		    	<div class="slider_content">
		    		<div class="slider_title">
		    			<?php echo get_theme_mod( 'fbs_home_slider_two_title'); ?>
		    		</div>
		    		<div class="slider_desc">
		    			<?php echo get_theme_mod( 'fbs_home_slider_two_description'); ?>
		    		</div>
		    		<a class="fbs_content_button white" href="<?php echo get_theme_mod('fbs_home_slider_two_link'); ?>">Read More</a>
		    	</div>
		    </div>

		    <div class="slider_inner"> 
		    	<div class="slider_img">
		    		<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_slider_three_image')); ?>"
		    		>
		    	</div>
		    	<div class="slider_content">
		    		<div class="slider_title">
		    			<?php echo get_theme_mod( 'fbs_home_slider_three_title'); ?>
		    		</div>
		    		<div class="slider_desc">
		    			<?php echo get_theme_mod( 'fbs_home_slider_three_description'); ?>
		    		</div>
		    		<a class="fbs_content_button white" href="<?php echo get_theme_mod('fbs_home_slider_three_link'); ?>">Read More</a>
		    	</div>
		    </div>
		</div>		 
	</div>
	<!-- About Us Section -->
	<div id="about_us">
		<div class="about_us_inner">
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="fbs_home_title"><?php echo get_theme_mod('fbs_home_about_title'); ?></div>
					<div class="fbs_home_content"><?php echo get_theme_mod('fbs_home_about_description'); ?>
						<a class="fbs_content_button" href="<?php echo get_theme_mod('fbs_home_about_link'); ?>">Read More</a>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Service Section -->
	<div id="services">
		<div class="service_inner">
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="fbs_home_title"><?php echo get_theme_mod('fbs_home_service_title'); ?></div>
				</div>
				<div class="grid-33 tablet-grid-33 mobile-grid-100">
					<div class="service_box">
						<div class="service_box_inner">
							<div class="service_img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_service_one_image')); ?>">
							</div>
							<div class="service_title"><?php echo get_theme_mod('fbs_home_service_one_title'); ?></div>
							<div class="service_content">
								<p><?php echo get_theme_mod('fbs_home_service_one_description'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-33 tablet-grid-33 mobile-grid-100">
					<div class="service_box">
						<div class="service_box_inner">
							<div class="service_img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_service_two_image')); ?>">
							</div>
							<div class="service_title"><?php echo get_theme_mod('fbs_home_service_two_title'); ?></div>
							<div class="service_content">
								<p><?php echo get_theme_mod('fbs_home_service_two_description'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-33 tablet-grid-33 mobile-grid-100">
					<div class="service_box">
						<div class="service_box_inner">
							<div class="service_img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('fbs_home_service_three_image')); ?>">
							</div>
							<div class="service_title"><?php echo get_theme_mod('fbs_home_service_three_title'); ?></div>
							<div class="service_content">
								<p><?php echo get_theme_mod('fbs_home_service_three_description'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Our Skills -->
	<div id="our_skills">
		<div class="our_skills_inner" style="background: url('<?php echo wp_get_attachment_url(get_theme_mod("fbs_home_skills_bg_image")); ?>'); background-repeat: no-repeat;background-size: cover;position: relative;">
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="fbs_home_title"><?php echo get_theme_mod('fbs_home_skills_title'); ?></div>
				</div>
				<div class="grid-25 tablet-grid-25 mobile-grid-50">
					<div class="skills_box">
						<div class="skills_box_inner">	
						<div id="skill_one"></div>
						<p id="fbs_home_skill_one_percentage" style="display: none;" ><?php echo get_theme_mod('fbs_home_skill_one_percentage'); ?></p>						
							<div class="skills_title"><?php echo get_theme_mod('fbs_home_skill_one_title'); ?></div>
						</div>
					</div>
				</div>
				<div class="grid-25 tablet-grid-25 mobile-grid-50">
					<div class="skills_box">
						<div class="skills_box_inner">	
						<div id="skill_two"></div>
						<p id="fbs_home_skill_two_percentage"  style="display: none;">
							<?php echo get_theme_mod('fbs_home_skill_two_percentage'); ?>
						</p>					
							<div class="skills_title"><?php echo get_theme_mod('fbs_home_skill_two_title'); ?></div>
						</div>
					</div>
				</div>
				<div class="grid-25 tablet-grid-25 mobile-grid-50">
					<div class="skills_box">
						<div class="skills_box_inner">	
						<div id="skill_three"></div>
						<p id="fbs_home_skill_three_percentage"  style="display: none;">
							<?php echo get_theme_mod('fbs_home_skill_three_percentage'); ?>
						</p>						
							<div class="skills_title"><?php echo get_theme_mod('fbs_home_skill_three_title'); ?></div>
						</div>
					</div>
				</div>
				<div class="grid-25 tablet-grid-25 mobile-grid-50">
					<div class="skills_box">
						<div class="skills_box_inner">	
						<div id="skill_four"></div>	
						<p id="fbs_home_skill_four_percentage"  style="display: none;">
							<?php echo get_theme_mod('fbs_home_skill_four_percentage'); ?>
						</p>						
							<div class="skills_title"><?php echo get_theme_mod('fbs_home_skill_four_title'); ?></div>							
							
						</div>
					</div>
				</div>
		</div>
	</div>
<!-- Portfolio Section -->

	<div id="portfolio">
		<div class="portfolio_inner">
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="fbs_home_title">
						<?php echo get_theme_mod('fbs_home_portfolio_title'); ?>
					</div>
					<?php 
						$port_total_items = get_theme_mod('fbs_home_portfolio_total');
						if(empty($port_total_items)) { $port_total_items = 4; }

					    query_posts(array( 
					        'post_type' => 'fbs_portfolio',
					        'showposts' => $port_total_items 
					    ) );  
					?>
					<?php while (have_posts()) : the_post(); 
						if($port_total_items % 3 == 0){
						?>
						<div class="grid-33 tablet-grid-33 mobile-grid-100">
							<div class="protfolio_box">
								<div class="protfolio_box_inner">	
								<div class="portfolio_img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</div>														
								<a href="<?php the_permalink(); ?>"><div class="protfolio_title"><?php the_title(); ?></div></a>
								</div>
							</div>
						</div>
					<?php } else{ ?>
						<div class="grid-25 tablet-grid-50 mobile-grid-100">
							<div class="protfolio_box">
								<div class="protfolio_box_inner">	
								<div class="portfolio_img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</div>														
								<a href="<?php the_permalink(); ?>"><div class="protfolio_title"><?php the_title(); ?></div></a>
								</div>
							</div>
						</div>
					<?php } endwhile;?>
				</div>
			</div>
		</div>
	</div>
<!-- Contact Section -->
	<div id="contact">
		<div class="contact_innner">
			<div class="grid-container">
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="fbs_home_title">
						<?php echo get_theme_mod('fbs_home_contact_title'); ?>
					</div>
				</div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<div class="grid-50 tablet-grid-50 mobile-grid-100">
						<div class="contact_form">
							<?php echo do_shortcode(get_theme_mod('fbs_home_contact_form_shortcode')); ?>
						</div>
					</div>
					<div class="grid-50 tablet-grid-50 mobile-grid-100">
						<div class="contact_address">
							<div class="map">
								<?php echo get_theme_mod('fbs_home_contact_map'); ?>
							</div>
							<div class="address">
								<i class="fa fa-map-marker" aria-hidden="true"></i> 
								<?php echo get_theme_mod('fbs_home_contact_address'); ?>
							</div>
							<div class="phone">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<p><a href="tel:<?php echo get_theme_mod('fbs_home_contact_number'); ?>"><?php echo get_theme_mod('fbs_home_contact_number'); ?></a></p>
							</div>
							<div class="email">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<p><a href="mailto:<?php echo get_theme_mod('fbs_home_contact_email'); ?>"><?php echo get_theme_mod('fbs_home_contact_email'); ?></a></p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>