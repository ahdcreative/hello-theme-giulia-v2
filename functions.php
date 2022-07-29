<?php
define( '__CHILD_INC__', __DIR__ . '/inc/', true );
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ) {
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }

        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
if ( ! function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(
            'hello-elementor',
            'hello-elementor',
            'hello-elementor-theme-style'
        ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

class LinkSide {
    public static function init() {
        ( new LinkSide )->load();
    }

    private function load() {
        require __CHILD_INC__ . '__loader.php';
    }
}