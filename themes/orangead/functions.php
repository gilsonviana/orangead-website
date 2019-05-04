<?php 

function theme_styles() {
    wp_enqueue_style( 'styles', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/vendors/slick/slick.css');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts(){

    wp_register_script('jquery_min', get_template_directory_uri() . '/vendors/jquery/jquery.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery_min');

    wp_register_script('slick_slider', get_template_directory_uri() . '/vendors/slick/slick.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('slick_slider');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
?>