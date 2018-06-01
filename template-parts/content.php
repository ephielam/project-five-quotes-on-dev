<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-quote">
		<header class="entry-content">
			<?php the_content(); ?>
		</header><!-- .entry-content -->

		<div class="entry-author">
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<?php $source = get_post_meta(get_the_ID(), '_qod_quote_source', true);
				$source_url = get_post_meta(get_the_ID(), '_qod_quote_source_url', true); ?>

			<?php if ($source && $source_url) : ?>
				<span class="source">, <a href="<?php echo $source_url;?>"><?php echo $source; ?></a></span>
			<?php elseif ($source) : ?>
				<span class="source">, <?php echo $source; ?></span>
			<?php else : ?>
				<span class="source"></span>
			<?php endif; ?>

		</div><!-- .entry-author -->
	</div><!-- .single-quote -->
	
</article><!-- #post-## -->
<?php if ( is_front_page() || is_single() ) : ?>
	<button type="button" id="new-quote">Show Me Another!</button>
<?php endif; ?>