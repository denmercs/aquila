<?php 
/**
 * functions template
 * @package Aquila 
 */

// echo '<pre>';
// print_r(get_template_directory_uri());
// wp_die();

 if(!defined('AQUILA_DIR_PATH')) {
     define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ));
 }

 require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_enqueue_scripts() {
    //Register styles
    wp_register_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [], false, 'all');
    
    // Register scripts
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', [ 'jquery'], false, true);
    
    // Enqueue styles
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');

    // Enqueue scripts
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');
    
    // other way of handling the enqueing of scripts/styles directly
    // wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    // wp_enqueue_style('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

?>
