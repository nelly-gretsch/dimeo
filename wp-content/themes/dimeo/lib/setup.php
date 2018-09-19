<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
register_nav_menus([
  'primary_navigation' => __('Top Navigation', 'sage'),
  'secondary_navigation' => __('Top-top Navigation', 'sage'),
  'footer-menu-1' => __( 'Footer Menu 1', 'sage' ),
  'footer-menu-2' => __( 'Footer Menu 2', 'sage' ),
  'footer-menu-3' => __( 'Footer Menu 3', 'sage' ),
  'footer-menu-4' => __( 'Footer Menu 4', 'sage' ),
  'sub-footer' => __( 'Sub Footer', 'sage' ),
]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
 //  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5');

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);
  return apply_filters('sage/display_sidebar', $display);
}
 
/**
 * Theme assets
 */
function assets() {
wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);
wp_enqueue_script('sage/jquery', Assets\asset_path('scripts/jquery-3.3.1.min.js'), null, true);
wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), null, false);

//if ( is_page('investment-portfolio') ) { 
//        wp_enqueue_script('sage/posts-filter', Assets\asset_path('scripts/ajax-filter-posts.js'), null, true);   
//}	
	
}  
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 1);