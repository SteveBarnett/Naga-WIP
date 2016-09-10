<?php
function load_theme_styles_and_scripts() {
  wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/style.min.css', null, '1.01', 'all' );
  	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/html5shiv.min.js', null, '1.0', true );
}
add_action('wp_enqueue_scripts', 'load_theme_styles_and_scripts');

// register_nav_menus( array(
//   'primary' => __( 'Primary Menu', 'pcm' ),
// ) );

/* tidy up nav li items */

function trimmed_classes($classes, $item){
     return [];
}

add_filter('nav_menu_css_class' , 'trimmed_classes' , 10 , 2);

/* remove emoji js junk */

function disable_wp_emojicons() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

add_action( 'init', 'disable_wp_emojicons' );
