<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-content">
		<?php the_content(); ?>
	</header><!-- .entry-content -->

	<div class="entry-author">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<span class="source"></span>
	</div><!-- .entry-author -->
	

</article><!-- #post-## -->
<?php if ( is_front_page() || is_single() ) : ?>
	<button type="button" id="new-quote">Show Me Another!</button>
<?php endif; ?>