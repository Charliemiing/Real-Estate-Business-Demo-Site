<?php

function my_theme_enqueue_styles() {

    wp_enqueue_style(
        'bootstrap', 
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css', 
        array(), 
        '5.3.0'
    );

    //Google Fonts
    wp_enqueue_style(
        'google-fonts-urbanist', 
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;700&display=swap', 
        array(), 
        null
    );

    // Theme Stylesheet
    wp_enqueue_style(
        'theme-style', 
        get_stylesheet_uri(), 
        array('bootstrap'), 
        wp_get_theme()->get('Version')
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js', 
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js', 
        array('jquery'), 
        '5.3.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Register navigation menu
function my_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'my-theme'), 
        'footer-menu' => __('Footer Menu', 'my-theme'),   
    ));
}
add_action('init', 'my_theme_register_menus');


function my_theme_add_supports() {
    
    add_theme_support('post-thumbnails');

    
    add_theme_support('title-tag');

    
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'my_theme_add_supports');

// Set the global content width
if (!isset($content_width)) {
    $content_width = 1596; 
}

// Register widget areas
function my_theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'my-theme'),
        'id' => 'sidebar-1',
        'description' => __('Main sidebar that appears on the right.', 'my-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

// Font Awesome for icons
function enqueue_font_awesome() {
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a076d05399.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

function enqueue_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome');



function allow_svg_uploads( $mimes ) {
  $mimes['svg'] = 'image/svg+xml'; 
  return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_uploads' );

function enqueue_swiper_assets() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

