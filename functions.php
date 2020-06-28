<?php 

function cf_setup(){

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('standard', get_template_directory_uri() . '/assets/css/standard.css', array(), false, 'all');

  // wp_deregister_script('jquery');

  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/app.js', 'jquery', 1, true);
  wp_enqueue_script('fontawesome','https://kit.fontawesome.com/e33b567028.js');

}
add_action('wp_enqueue_scripts', 'cf_setup');

//Add theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

/** automatic feed link*/
add_theme_support('automatic-feed-links');

/** tag-title **/
add_theme_support('title-tag');

/* End of Theme Support */

function theme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'theme_add_woocommerce_support');

/** post formats */
$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
add_theme_support( 'post-formats', $post_formats);






// Add image sizes
add_image_size('blog_image', 1200, 630, false);
add_image_size('hero_image', 2880, 1500, false);
add_image_size('landscape_image', 900, 1200, false);
add_image_size('portrait_image', 1200, 900, false);
add_image_size('slideshow_image', 2800, 1500, false);
add_image_size('post_image', 1100, 550, false);



/* End of adding a widget */


require_once(__DIR__ . '/includes/widgets.php');
require_once(__DIR__ . '/includes/menu.php');
require_once(__DIR__ . '/includes/woo.php');
require_once(__DIR__ . '/includes/shortcodes.php');
require_once(__DIR__ . '/includes/template-tags.php');