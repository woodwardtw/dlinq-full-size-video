<?php 
/*
Plugin Name: DLINQ - full size video 
Plugin URI:  https://github.com/
Description: For making videos become full size without hassle
Version:     1.0
Author:      DLINQ
Author URI:  https://dlinq.middcreate.net
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('wp_enqueue_scripts', 'dlinq_full_video_load_scripts');

function dlinq_full_video_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.0'; 
    $in_footer = true;    
    wp_enqueue_script('dlinq-full-video-js', plugin_dir_url( __FILE__) . 'js/dlinq-full-video.js', $deps, $version, $in_footer); 
    wp_enqueue_style( 'dlinq-full-video-css', plugin_dir_url( __FILE__) . 'css/dlinq-full-video.css');
}




//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
