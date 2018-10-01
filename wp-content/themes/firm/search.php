<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>
<div class="wrapper">
	<div class="wrap_inner">		
		<header class="page-header">
			<div class="grid-container">
				<?php if ( have_posts() ) : ?>
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
					<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
				<?php endif; ?>
			</div>
		</header>

		<div class="grid-container">
			<div class="grid-70 tablet-grid-70  mobile-grid-100">
				<div class="content-area">
				<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/search');
						endwhile; // End of the loop.
					else : ?>
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
						<?php get_search_form();
					endif;
				?>
				
					<?php
						global $wp_query;
						$big = 999999999; // need an unlikely integer
						$pag = paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
					?>
					<?php if(!empty($pag)): ?>
						<div class="next_prev_wrapper"> </div>
					<?php endif; ?>
				</div>
			</div>
			<div class="grid-30 tablet-grid-30  mobile-grid-100">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();