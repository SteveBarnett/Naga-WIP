<?php
function load_theme_styles_and_scripts() {
?>
  <script>
      <?php echo file_get_contents( get_template_directory_uri() . '/js/loadCSS.min.js' ); ?>
      var stylesheet = loadCSS( "<?php echo get_template_directory_uri() . '/css/style.min.css'; ?>" );
  </script>
  <noscript>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style.min.css'; ?>">
  </noscript>
  <?php

  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/html5shiv.min.js', null, '1.0', true );
}

// register_nav_menus( array(
//   'primary' => __( 'Primary Menu', 'pcm' ),
// ) );

/* tidy up nav li items */

function trimmed_classes($classes, $item){
     return [];
}

add_filter('nav_menu_css_class' , 'trimmed_classes' , 10 , 2);

function disable_wp_unwanted_stuff() {
  /* remove emoji js junk */
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  wp_deregister_script( 'wp-embed' );

  // Remove the REST API endpoint.
  remove_action('rest_api_init', 'wp_oembed_register_route');

  // Turn off oEmbed auto discovery.
  // Don't filter oEmbed results.
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

  // Remove oEmbed discovery links.
  remove_action('wp_head', 'wp_oembed_add_discovery_links');

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action('wp_head', 'wp_oembed_add_host_js');
}

add_action( 'init', 'disable_wp_unwanted_stuff' );
