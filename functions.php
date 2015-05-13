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
/*  Copyright 2015  Zac  (email : zacfirst@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>

<?php
function my_theme_scripts_function1() {
    wp_enqueue_style( 'style.css', plugins_url() . '/zRolling/style.css' ); 
	wp_enqueue_script( 'zRolling', plugins_url() . '/zRolling/rolling.js');
	wp_enqueue_script( 'marquee', plugins_url() . '/zRolling/jquery.marquee.min.js');
}

add_action('wp_enqueue_scripts','my_theme_scripts_function1', 11);