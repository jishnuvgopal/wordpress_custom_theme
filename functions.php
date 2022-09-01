<?php

function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri().'/style.css',array(),false,'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_stylesheets');


function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jQuery-3.6.0.min.js','',1,true);
    // add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts','include_jquery');


function loadjs(){
    wp_register_script('customjs',get_template_directory_uri().'/js/script.js','',1,true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','loadjs');




function theme_setup(){
    // add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme','theme_setup');


function custom_excerpt_length(){
return 15;
}

add_filter('excerpt_length','custom_excerpt_length');

//register nav-menu
function register_my_menu(){
    register_nav_menus(
        array(
            "header-menu"=>__('Header Menu'),
            "footer-menu"=>__('Footer Menu')
        )
        );
}
add_action("init","register_my_menu")
?>