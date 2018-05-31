<?php
/**
 * The template for displaying the submit a quote page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); 

			    if ( is_user_logged_in() ) {
			        echo the_content();
			    } else { ?> 
			    	<p>Sorry, you must be logged in to submit a quote!</p>
			    	<p><a href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">Click here to login.</a></p>
				<?php } ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>