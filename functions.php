<?php
/*
Plugin Name: zRolling
Plugin URI: N/A
Description: Recent news rolling
Version: 0.1
Author: Zac
Author URI: N/A
*/
?>
<?php
function zrolling() {
    wp_enqueue_style( 'css', plugins_url() . '/zRolling/style.css' ); 
    wp_enqueue_script( 'marquee', plugins_url() . '/zRolling/jquery.marquee.min.js');
	wp_enqueue_script( 'zRolling', plugins_url() . '/zRolling/rolling.js');
}

add_action('wp_enqueue_scripts','zrolling', 11);