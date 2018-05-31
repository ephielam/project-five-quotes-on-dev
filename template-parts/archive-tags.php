<?php
/**
 * Template part for displaying tags archive.
 *
 * @package QOD_Starter_Theme
 */

?>

<div class ="tags-archive">
	<h2>Tags</h2>
	<?php $tags = get_tags();
	$html = '<ul class="tags-list">';
	foreach ( $tags as $tag ) {
		$tag_link = get_tag_link( $tag->term_id );		
		$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag'>";
		$html .= "{$tag->name}</a></li>";
	}
	$html .= '</ul>';
	echo $html; ?>
</div> <!-- .tags-archive-->
