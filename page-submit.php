<?php
/**
 * The template for displaying the submit a quote page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1><?php the_title(); ?></h1>

			<?php while ( have_posts() ) : the_post(); 

			    if ( is_user_logged_in() && current_user_can('edit_posts') ) { ?>
			        <form name="quoteForm" id="quote-submission-form">
                     	<div>
                        	<label for="quote-author">Author of Quote</label>
                        	<input type="text" name="quote_author" id="quote-author" required aria-required="true">
                     	</div>
	                    <div>
	                        <label for="quote-content">Quote</label>
	                        <textarea rows="3" cols="20" name="quote_content" id="quote-content" required aria-required="true"></textarea>
	                    </div>
	                    <div>
	                        <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
	                        <input type="text" name="quote_source" id="quote-source">
	                    </div>
	                    <div>
	                        <label for="quote-source-url">Provide the the URL of the quote source, if available.</label>
	                        <input type="url" name="quote_source_url" id="quote-source-url">
	                    </div>

                     	<input type="submit" class="quote-submit-button" value="Submit Quote">
                  </form>
                  <p class="submit-success-message" style="display: none;"></p>
                 <?php 
			    } else { ?> 
			    	<p>Sorry, you must be logged in to submit a quote!</p>
			    	<p><a href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">Click here to login.</a></p>
				<?php } ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>