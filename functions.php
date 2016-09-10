<?php
function load_theme_styles_and_scripts() {
  if ( isset($_COOKIE['cachedCSS']) && $_COOKIE['cachedCSS'] === 'true' ) {
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/style.min.css', null, '1.01', 'all' );
  }
  	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/html5shiv.min.js', null, '1.0', true );
}
add_action('wp_enqueue_scripts', 'load_theme_styles_and_scripts');

function load_css_in_header() {
  if ( !isset($_COOKIE['cachedCSS']) || $_COOKIE['cachedCSS'] !== 'true' ) :
  ?>
    <style type="text/css">
      <?php echo file_get_contents( get_template_directory_uri() . '/css/style.min.css' ); ?>
    </style>
    <script>
        var expires = new Date(+new Date + (7 * 24 * 60 * 60 * 1000)).toUTCString();
        document.cookie = 'cachedCSS=true; expires=' + expires;
    </script>
  <?php
  endif;
}
add_action('wp_head', 'load_css_in_header', 30);

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
