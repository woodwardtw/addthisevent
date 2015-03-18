<?php 
/**
 * Plugin Name: Add This Event JS.
 * Plugin URI: https://addthisevent.com/
 * Description: Simply adds the addthisevent.com js to the footer.
 * Version:1.0.0
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */


function add_addthisevent() {
    wp_enqueue_script( 'add_this_event', 
                       'https://addthisevent.com/libs/1.5.8/ate.min.js', 
                       'scriptversion 1.0', 
                       true);
}
add_action( 'wp_enqueue_scripts', 'add_addthisevent' );