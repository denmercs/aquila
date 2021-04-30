<?php

/**
 * Bootstrap (add all the basic functionality) of the theme
 * @package Aquila
 */


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class here:
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //Register styles
        wp_register_style('style', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap', AQUILA_DIR_URI . '/assets/library/css/bootstrap.min.css', [], false, 'all');


        // Enqueue styles
        wp_enqueue_style('style');
        wp_enqueue_style('bootstrap');
    }

    public function register_scripts()
    {
        // Register scripts
        wp_register_script('main', AQUILA_DIR_URI . '/assets/js/main.js', [], filemtime(AQUILA_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('bootstrap', AQUILA_DIR_URI . '/assets/library/js/bootstrap.min.js', ['jquery'], false, true);


        // Enqueue scripts
        wp_enqueue_script('main');
        wp_enqueue_script('bootstrap');
    }
}
