<?php

class GiuliaFeaures {
    public static function init() {
        add_action('after_setup_theme', array('GiuliaFeatures', 'config_custom_logo'));
    }

    public static function config_custom_logo() {
        add_theme_support('custom-logo');
    }
}
GiuliaFeaures::init();
