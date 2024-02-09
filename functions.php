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
    wp_enqueue_style('libidiol-style', get_template_directory_uri() . "/assets/css/style.scss", array('libidiol-bootstrap'), $version, 'all');
    wp_enqueue_style('libidiol-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('libidiol-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'libidiol_register_styles');



function libidiol_register_scripts()
{
    wp_enqueue_script('libidiol-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('libidiol-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('libidiol-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('libidiol-main', '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'libidiol_register_scripts');

?>

<?php
