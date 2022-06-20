<?php
/**
 * Plugin Name: WordPress Embed Disabler
 * Plugin URI:
 * Description: Disable wp-embed
 * Version: 1.0
 * Author: Mateusz Mazurek
 * Author URI: https://mateuszmazurek.pl
 */

//* prevent directly access
if (!defined('ABSPATH')) die();

//* Disable wp-embed
function my_deregister_scripts(){
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
