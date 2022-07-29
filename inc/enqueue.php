<?php
class HelloEnqueue {
    public static function init(): void
    {
        add_action('wp_enqueue_scripts', array('HelloEnqueue', 'enqueue_styles'));
    }

    public static function enqueue_styles(): void
    {
        wp_enqueue_style('hello-elementor-child-theme', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style'], '1.0', 'all');
        wp_enqueue_style('ottica-giulia', get_stylesheet_directory_uri() . 'assets/css/giulia-child.css', ['hello-elementor-child-theme'], '1.0', 'all');
    }
}