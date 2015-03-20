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
 
 //register  scripts
function ate_scripts() {
    wp_register_script( 'add_this_event', 
                       'https://addthisevent.com/libs/1.5.8/ate.min.js', 
                       array(),
                       'scriptversion 1.5.8', 
                       true);
    wp_register_script( 'add_this_events_prefs',
                        plugins_url( '/js/prefs.js', __FILE__ ),
                        array(add_this_event),
                        '1',
                        true);
    wp_register_style('add_this_event_css',
                        plugins_url( '/ate.css', __FILE__ ),
                        array(),
                        '1',
                        false);
//enque scripts
    wp_enqueue_script('add_this_event');
    wp_enqueue_script('add_this_events_prefs');
    wp_enqueue_style('add_this_event_css');
 
    $ate_license      = (get_option('ate_license') == '') ? "" : get_option('fwds_effect');
    $ate_mouse    = (get_option('ate_mouse') == 'enabled') ? true : false;
    $ate_css    = (get_option('ate_css') == 'enabled') ? true : false;
    $config_array = array(
            'license' => $ate_license,
            'mouse' => $ate_mouse,
            'css' => $ate_css
        );
 
    wp_localize_script('add_this_event_prefs', 'setting', $config_array);
 
}
add_action( 'wp_enqueue_scripts', 'ate_scripts' );
