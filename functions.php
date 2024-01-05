<?php
require_once 'inc/wp_bootstrap_navwalker.php';

/**
 * Function to add styles
 * wp_enqueue_style($handle, $src, $deps, $ver, $media) hook
 */

function add_styles(){
    wp_enqueue_style("bootstrap-style", get_template_directory_uri().'/assets/css/bootstrap.min.css', false);
    wp_enqueue_style('header-style', get_template_directory_uri().'/assets/css/header.css', false);
    wp_enqueue_style('footer-style', get_template_directory_uri().'/assets/css/footer.css', false);
    wp_enqueue_style('home-style', get_template_directory_uri().'/assets/css/home.css', false);
    wp_enqueue_style('font-style', get_template_directory_uri().'/assets/css/all.min.css', false);
    wp_enqueue_style('global-style', get_template_directory_uri().'/assets/css/global.css', false);
}

/**
 * Function to add scripts
 * wp_enqueue_style($handle, $src, $deps, $ver, $media, $in_footer) 
 */

function add_scripts(){
    wp_enqueue_script("bootstrap-script", get_template_directory_uri().'/assets/js/bootstrap.min.js', false, "1.1.6", true);
    // wp_enqueue_script("bootstrap-bundle-script", get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), "1.1.6", true);
    wp_enqueue_script("main-script", get_template_directory_uri().'/assets/js/main.js', false, false, true);
}


/**
 * Function to add 'menu option' on the dashboard (and 'locations')
 */

// function add_menu_option(){
//     register_nav_menu('bootstrap-menu', __('Navigation Bar')); //string $location, string $description 
// }
function add_menu_option(){
    register_nav_menus(array(
        'header_menu' => 'Navigation Bar',
        'footer_menu' => 'Footer'
    ));
}

/**
 * Function to add menus on the website
 * Add the menu that has the theme location => '...'
 * if there is no menu in that location, the default menu will be added
 */

function add_header_menu(){
    wp_nav_menu(array(
        'theme_location' => 'header_menu', //Add the menu that has the location header_menu
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
        'container' => false,
        'depth ' => 2,
        'fallback_cb' => function(){},
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
}

function add_footer_menu(){
    wp_nav_menu(array(
        'theme_location' => 'footer_menu' //Add the menu that has a footer_menu
    ));
}

/**
 * Function to customize the length of the excerpt
 */
function customize_excerpt_length($length){
    return 20;
}

/**
 * Function to change the [...] from the excerpt
 */
function change_excerpt_dots($more){
    return '...';
}

/**
 * Add filters
 */
add_filter('excerpt_length', 'customize_excerpt_length');
add_filter('excerpt_more', 'change_excerpt_dots');

/**
 * Add featured image option
 */
add_theme_support('post-thumbnails');

 /**
 * Add Actions/hook
 * add_action(string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ) : true
 */

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
add_action('init', 'add_menu_option');

?>