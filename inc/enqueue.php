<?php

class GiuliaEnqueue{
    public static function init() {
        add_action('wp_enqueue_scripts', array('GiuliaEnqueue', 'enqueue_styles'));
    }

    public static function enqueue_styles(){
        wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style',	],	'1.0.0'	);
        wp_enqueue_style('hello-child-styles', get_stylesheet_directory() . '/assets/css/giulia-child.css', array(), false, 'all');
    }
}
GiuliaEnqueue::init();
