<?php
/**
 * Dintercito enqueue scripts
 *
 * @package Dintercito
 */
function dintercito_scripts() {
    wp_enqueue_style( 'dintercito-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.css', array(), '0.1.0');
    wp_enqueue_style( 'dintercito-styles', get_stylesheet_directory_uri() . '/style.css', array(), '0.1.0');
    
    wp_enqueue_script('jquery'); 

    wp_enqueue_script( 'dintercito-scripts', get_template_directory_uri() . '/js/theme.js', array(), '0.1.0', true );

    wp_enqueue_script( 'Wow', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1.0', true );

    wp_enqueue_script( 'BootStrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '0.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'dintercito_scripts' );