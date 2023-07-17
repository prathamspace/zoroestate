<?php


// logo
add_theme_support('custom-header');

//  Navigation 
require_once('wp-bootstrap-navlist-walker.php');
register_nav_menus(
    array("primary-menu" =>  "Primary Menu")
);

//  Navigation Ending 





// Adding Styles 

function zoroestate_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("bootstrap-styles", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), "5.3.0", "all");
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css", array(), $version, "all");
    wp_enqueue_style("slick-css", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), "1.8.1", "all");
    wp_enqueue_style("custom-styles", get_template_directory_uri() . "/assets/css/style.css", array('bootstrap-styles'), "1.0", "all");
}
add_action('wp_enqueue_scripts', 'zoroestate_styles');


// Adding Scripts

function zoroestate_scripts()
{
    wp_enqueue_script("prthamspace-jquery", "https://code.jquery.com/jquery-3.7.0.min.js", array(), "3.7.0", "all");
    wp_enqueue_script("bootstrap-scripts", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array(), "5.3.0", "all");
    wp_enqueue_script("slick-script", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), "1.8.1", "all");

    wp_enqueue_script("custom-script", get_template_directory_uri() . "/assets/js/script.js", array('jquery'), "1.0", "all");
}
add_action('wp_enqueue_scripts', 'zoroestate_scripts');


// Widget Sidebar

register_sidebar(
    array(
        'name' => "Right Sidebar",
        'id' => "zoro-sidebar",
        'before_widget' => '<li id="mainSidebar" >',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="sidebarTitle">',
        'after_title'   => '</h2>',
    )
);
