<?php
// Creating the shortcode for three columns
function three_columns() {

	$return = "";

	$return .= '<div id="vskb-three">';

	$vskb_cats = get_categories('hide_empty=0&orderby=name&order=asc');

	foreach ($vskb_cats as $cat) :

		$return .= '<ul class="vskb-cat-list"><li class="vskb-cat-name"><a href="'. get_category_link( $cat->term_id ) .'" title="'. $cat->name .'" >'. $cat->name .'</a></li>';

		$vskb_args = array(
			'posts_per_page' => -1, // max number of post per category
			'cat' => $cat->term_id
		);

		$vskb_posts = get_posts($vskb_args); 

		if ( count($vskb_posts) > 0 ) :

		foreach( $vskb_posts AS $single_post ) :
	
			$return .=  '<li class="vskb-post-name">';
			$return .=  '<a href="'. get_permalink( $single_post->ID ) .'" rel="bookmark" title="'. get_the_title( $single_post->ID ) .'">'. get_the_title( $single_post->ID ) .'</a>';
			$return .=  '</li>';
		
		endforeach;
		
		endif;
	
	$return .=  '</ul>';
		
	endforeach;
	
	$return .= '</div>';

	return $return;
	
}
?>