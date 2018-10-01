<?php
/*
* Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div class="wrapper">
	<div class="wrap_inner">		
		<header class="page-header">
			<div class="grid-container">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</div>
		</header>
		<div class="content-area">
			<div id="contact">
				<div class="contact_innner">
					<div class="grid-container">
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
	</div>
</div>
<?php get_footer(); ?>