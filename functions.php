<?php

add_action( 'wp_enqueue_scripts', 'prengi_scripts' );
add_action( 'after_setup_theme', 'prengi_logo' );
add_action( 'after_setup_theme', 'prengi_menu' );

function prengi_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/assets/css/owl.theme.default.css' );

    wp_enqueue_script( 'owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
function prengi_logo() {
    add_theme_support(
        'custom-logo', array(
        'height' => 180,
        'width'  => 180
        )
    );
}
function prengi_menu() {
    register_nav_menu( menu, promo_menu );
}