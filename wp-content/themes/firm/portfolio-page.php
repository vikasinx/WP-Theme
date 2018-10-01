<?php
/* 
*Template Name: portfolio Page
*/
get_header(); ?>

<div class="wrapper">
	<div class="wrap_inner">		
			<header class="page-header">
				<div class="grid-container">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</div>
			</header>
		<div class="grid-container">
			<div id="portfolio_cat">
				<?php
				   $arg = array(
				               'taxonomy' => 'fbs_portfolio_cat',
				               'orderby' => 'name',
				               'order'   => 'ASC'
				           );

				   $port_cats = get_categories($arg);
				   echo '<ul class="port_cat_list" id="portfolio-filter">';
				   echo '<li><a id="cat_fl" data-filter=".all" href="javascript:void(0);" class="active">Show All</a></li>';
					   foreach($port_cats as $portfolio_category) {
					   	$cname = str_replace(' ', '-', $portfolio_category->name);
					   	$cname = strtolower($cname);
					?>						
						<li> <a id="cat_fl" href="javascript:void(0);"  data-filter="<?php echo ".".$cname; ?>"><?php echo $portfolio_category->name; ?></a></li>
					<?php
					   }
					echo '</ul>';
				?>
			</div>
			<div id="portfolio">
				<div class="portfolio_inner">
					<div class="grid-container">
						<div class="grid-100 tablet-grid-100 mobile-grid-100" id="portfolio-list">
							<?php 
								$port_total_items = get_theme_mod('fbs_home_portfolio_total');
								$args = array( 'post_type' => 'fbs_portfolio', 'posts_per_page' => -1);
    							$loop = new WP_Query( $args );
							?>
							<?php							
							while ($loop->have_posts() ) : $loop->the_post(); 							
								$links = [];
								$terms = get_the_terms( $post->ID, 'fbs_portfolio_cat' );   
								    if ( $terms && ! is_wp_error( $terms ) ) : 
								       $links = array();
								           foreach ( $terms as $term ) {
								           $links[] = $term->slug;
								        }
								           $tax_links = join( " ", $links);          
								           $tax = strtolower($tax_links);
								        else :  
								        $tax = '';                  
								    endif;

								if($port_total_items % 3 == 0){
								?>
								<div class="grid-33 tablet-grid-33 mobile-grid-100 port-item all <?php echo $tax; ?>" style="display: none;">
									<div class="protfolio_box">
										<div class="protfolio_box_inner">	
										<div class="portfolio_img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										</div>														
										<a href="<?php the_permalink(); ?>"><div class="protfolio_title"><?php the_title(); ?></div></a>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="grid-25 tablet-grid-50 mobile-grid-100 port-item all <?php echo $tax; ?>" style="display: none;">
									<div class="protfolio_box">
										<div class="protfolio_box_inner">	
										<div class="portfolio_img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										</div>														
										<a href="<?php the_permalink(); ?>"><div class="protfolio_title"><?php the_title(); ?></div></a>
										</div>
									</div>
								</div>
							<?php }  endwhile; wp_reset_query();?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>