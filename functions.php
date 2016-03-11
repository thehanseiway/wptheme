<?php

function wph_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'main_styles', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wph_theme_styles' );

function wph_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','bootstrap_js'), '', true);
}

add_action( 'wp_enqueue_scripts', 'wph_theme_js' );

?>
