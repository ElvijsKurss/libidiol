<?php

function libidiol_theme_support()
{
    // manage WordPress title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'libidiol_theme_support');

function libidiol_menus()
{
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}
add_action('init', 'libidiol_menus');

function libidiol_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('libidiol-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('libidiol-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('libidiol-style', get_template_directory_uri() . "/assets/css/style.css", array('libidiol-bootstrap'), $version, 'all');
    wp_enqueue_style('libidiol-fontello', get_template_directory_uri() . "/assets/css/fontello.css", array('libidiol-bootstrap'), $version, 'all');
}

add_action('wp_enqueue_scripts', 'libidiol_register_styles');

function libidiol_register_admin_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('libidiol-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('libidiol-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('libidiol-style', get_template_directory_uri() . "/assets/css/style.css", array('libidiol-bootstrap'), $version, 'all');
    wp_enqueue_style('libidiol-fontello', get_template_directory_uri() . "/assets/css/fontello.css", array('libidiol-bootstrap'), $version, 'all');
}


// comment this line to disable additional admin stylesheets
add_action('admin_enqueue_scripts', 'libidiol_register_admin_styles');



function libidiol_register_scripts()
{
    $version = wp_get_theme()->get('Version');

    // Enqueue jQuery first
    wp_enqueue_script('libidiol-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('libidiol-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('libidiol-jquery'), '4.4.1', true);

    // Enqueue your custom script
    wp_enqueue_script('libidiol-main', get_template_directory_uri() . '/assets/js/main.js', array('libidiol-jquery'), $version, true);
}

add_action('wp_enqueue_scripts', 'libidiol_register_scripts');
