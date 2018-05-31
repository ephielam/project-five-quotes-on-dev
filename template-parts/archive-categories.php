<?php
/**
 * Template part for displaying categories archive.
 *
 * @package QOD_Starter_Theme
 */

?>

<div class="categories-archive">
	<h2>Categories</h2>
	<ul>
	    <?php wp_list_categories( array(
	        'orderby' => 'name',
	        'title_li' => '',
	        // 'posts_per_page' => 5
	    ) ); ?> 
    </ul>		
</div><!-- .categories-archive -->
