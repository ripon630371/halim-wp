<?php

function halim_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails',array('sliders','services','counters','teams','testimonial'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim'),
    ));

}

//custom post

function halim_custom_posts(){
    //slider custom post 
    register_post_type('sliders',array(

        'labels' => array(
            'name' => __('Sliders', 'halim'),
            'singular_name' => __('Slider', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true
    ));

     // Services Custom Post
     register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'halim'),
            'singular_name' => __('Service', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true
    ));

      // Counter Custom Post
      register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counter', 'halim'),
            'singular_name' => __('Counter', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title','custom-fields'),
    ));

    // Counter Custom Post
      register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' => __('Team', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title','thumbnail','custom-fields'),
    ));
    // Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
    ));


}

add_action('init', 'halim_custom_posts');


add_action('after_setup_theme','halim_setup');

function halim_assets() {
    
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'halim_assets');