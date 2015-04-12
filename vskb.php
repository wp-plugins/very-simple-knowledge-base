<?php
/**
 * Plugin Name: Very Simple Knowledge Base
 * Description: This is a very simple plugin to create a knowledgebase. Use shortcode [knowledgebase-three] or [knowledgebase] to display your categories and posts in 3 or 4 columns on a page. For more info please check readme file.
 * Version: 1.5
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
	if(!is_admin()) {
		wp_enqueue_style('vskb_style', plugins_url('vskb_style.css',__FILE__));
	}
}
add_action('wp_enqueue_scripts', 'vskb_scripts');


// Include the shortcode files
include 'three_columns.php';
include 'four_columns.php';

?>