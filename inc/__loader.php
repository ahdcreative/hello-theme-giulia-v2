<?php

class HelloElementorGiuliaLoader {
    public static function init() {
        // carica tutti i files dentro la cartella inc
        // self::load('filename');
    }

    private static function load($file) {
        require get_stylesheet_directory() . '/inc/' . $file . '.php';
    }
}

HelloElementorGiuliaLoader::init();
