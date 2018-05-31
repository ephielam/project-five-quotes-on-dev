<?php
/**
 * Template part for displaying authors archive.
 *
 * @package QOD_Starter_Theme
 */

?>

<div class="authors-archive">
	<h2>Quote Authors</h2>
	<ul class="authors-list">
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endforeach; wp_reset_postdata(); ?>
	</ul><!-- .authors-list-->
</div><!-- .authors-archive -->
