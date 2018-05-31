<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-info">
			<p>Brought to you by <a href="http://www.redacademy.com/">RED Academy</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>
