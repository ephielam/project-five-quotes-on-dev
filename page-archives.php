<?php
/**
 * Template Name: Archives
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h1><?php the_title(); ?></h1>

		<?php if ( have_posts() ) : 
			$args = array( 
				'post_type' => 'post', 
				'order' => 'DESC',
				'posts_per_page' => -1
			   	);
			$posts = get_posts( $args ); // returns an array of posts
			?>

			<!-- get the authors archive template part -->
			<?php get_template_part( 'template-parts/archive', 'authors' ); ?>


			<!-- get the categories archive template part -->
			<?php get_template_part( 'template-parts/archive', 'categories' ); ?>

			<!-- get the tags archive template part -->
			<?php get_template_part( 'template-parts/archive', 'tags' ); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>



		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
