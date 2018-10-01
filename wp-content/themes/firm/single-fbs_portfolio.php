<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>
<div class="wrapper">
	<div class="wrap_inner">
		<div class="grid-container">
			<div class="grid-70 tablet-grid-70  mobile-grid-100">
				<div class="content-area">
					<?php
					
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<div class="post-thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
								<?php endif; ?>
								<header class="entry-header">
									<?php the_title( '<h2 class="entry-title">', '</h2>' );	?>
								</header>
								<div class="post-meta">
									<span class="post-date"><?php the_date(); ?></span>			
									<span class="comment-count"> • Comments(<?php echo get_comments_number(); ?>)</span>
									<span class="post-author">  • By <?php the_author_meta('display_name'); ?></span>
								</div>

							<div class="entry-content">
								<?php  the_content(); ?>
								<div class="next_prev_wrapper">
									<div class="prev_post"> 
										<?php previous_post_link(); ?>
									</div>    
									<div class="next_post">
										<?php next_post_link(); ?>
									</div>
								</div>
								
							</div>
						</div>
						<?php endwhile;?>					
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
<?php get_footer(); ?>