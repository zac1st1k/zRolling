<?php // Opening PHP tag - nothing should be before this, not even whitespace

// Custom Function to Include
function rolling() {
    echo '<script src="' . get_stylesheet_directory_uri() . '/rolling.js"></script>' . "\n";
    //echo '<script src="' . get_stylesheet_directory() . '/rolling.js"></script>' . "\n";

}

add_action( 'wp_head', 'rolling' );


// function my_theme_scripts_function() {
// 	wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/myscript.js');
// }

// add_action('wp_enqueue_scripts','my_theme_scripts_function');
