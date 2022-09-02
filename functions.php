<?php

//add customizer.php file
require_once('templates/helpers/customizer.php');



function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri().'/style.css',array(),false,'all');
    wp_enqueue_style('style');

    wp_register_style('fontawesome',get_template_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css',array(),false,'all');
    wp_enqueue_style('fontawesome');
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


//adding new feutures to wordpress theme

function fn_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme','fn_theme_supports');

function custom_excerpt_length(){
return 15;
}

add_filter('excerpt_length','custom_excerpt_length');

//register nav-menu
function fn_nav_menu(){
    register_nav_menus(
        array(
            "primary-menu"=>__('Primary Menu','text_domain'),
            "footer-menu"=>__('Footer Menu','text_domain')
        )
        );
}
add_action("init","fn_nav_menu");

function add_link_atts($atts){
    $atts['class']='link text-light';
    return $atts;
}
add_filter('nav_menu_link_attributes','add_link_atts')
?>