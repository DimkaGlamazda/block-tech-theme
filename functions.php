<?php

require_once 'includes/Media.php';
require_once 'includes/Parts.php';
require_once 'includes/News.php';

define('BTJ_MEDIA_ICONS', get_template_directory_uri() . '/media/icons');


define('BTJ_SCRIPTS_ROOT', get_template_directory_uri() . '/js');
define('BTJ_STYLESHEET_ROOT', get_template_directory_uri() . '/css');


function btj_scripts()
{
	wp_enqueue_script('jquery', BTJ_SCRIPTS_ROOT . '/lib/jquery-3.3.1.min.js');
	wp_enqueue_script('bootstrap-js', BTJ_SCRIPTS_ROOT . '/lib/bootstrap.min.js');
	wp_enqueue_script('owl-carousel-js', BTJ_SCRIPTS_ROOT . '/lib/owl.carousel.min.js');
	wp_enqueue_script('bxslider', BTJ_SCRIPTS_ROOT . '/lib/jquery.bxslider.js');

	wp_enqueue_script('cj-scripts', BTJ_SCRIPTS_ROOT . '/app.js');
}
wp_localize_script('mylib', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));

add_action('wp_enqueue_scripts', 'btj_scripts');

/**
 *  load News post type
 */

News::load();