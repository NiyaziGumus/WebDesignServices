<?php

require_once get_template_directory() . '/classes/class-bootstrap-navwalker.php';

function setup_theme() {
    add_theme_support('menus');
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu'
    ));

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Slab:wght@100;300;400;700&display=swap', array(), null);

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), null);

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '5.1.3');

    // Custom CSS
    wp_enqueue_style('theme-custom-css', get_template_directory_uri() . '/css/custom/extra.css', array('bootstrap-css'), '1.0');

    // Scripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom/extra.js', array('bootstrap-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'setup_theme');


?>
