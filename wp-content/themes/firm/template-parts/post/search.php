<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
	<div class="entry-content">
		<?php  the_excerpt(); ?>
	</div>
	<div class="readmore">
		<a href="<?php the_permalink(); ?>">Read More >></a>
	</div>
</article>
