<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title">', '</h2>' );	?>
		</header>
	<div class="entry-content">
		<?php  the_content(); ?>		
	</div>
</article>