<?php
/**
 * Plugin Name: Very Simple Knowledge Base
 * Description: This is a very simple plugin to create a knowledgebase. Use shortcode [knowledgebase] to display your categories and posts in columns on a page. For more info please check readme file.
 * Version: 1.2
 * Author: Guido van der Leest
 * Author URI: http://www.guidovanderleest.nl
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: vskb
 * Domain Path: translation
 */

// Load the plugin's text domain
function vskb_init() { 
	load_plugin_textdomain( 'vskb', false, dirname( plugin_basename( __FILE__ ) ) . '/translation' );
}
add_action('plugins_loaded', 'vskb_init');
 

// Enqueues plugin scripts
function vskb_scripts() {	
	if(!is_admin())
	{
		wp_enqueue_style('vskb_style', plugins_url('vskb_style.css',__FILE__));
	}
}
add_action('wp_enqueue_scripts', 'vskb_scripts');


// Creating the shortcode
function knowledgebase_function() {

	$return = "";

	$return .= '<div id="vskb">';

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

function register_shortcodes(){
	add_shortcode('knowledgebase', 'knowledgebase_function');
}

add_action( 'init', 'register_shortcodes');

?>