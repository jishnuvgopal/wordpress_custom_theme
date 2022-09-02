<?php

//wp customizer settings

function fn_customizer_settings($wp_customizer){


    //add a customizer setting
    //include new section
    $wp_customizer->add_section('header',array(
        'title'=>__('Header Settings','text-domain'),
        'priority'=>70
    ));
    //allow us to add capability to the customizer settings
    $wp_customizer->add_setting("header_image",array(
        'capability'=>'edit_theme_options'
    ));

    //add controls in the customizer settings
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
        'label'=>__('Header Image','text-domain'),
        'section'=>'header'
    )));

    //adding header text
    $wp_customizer->add_setting("header_text_field",array(
        'capability'=>'edit_theme_options'
    ));

    //adding text control
    $wp_customizer->add_control('header_text_control',array(
        'label'=>__('Header Text','text-domain'),
        'description'=>'Change Header Text',
        'section'=>'header',
        'settings'=>'header_text_field'
    ));
}

add_action('customize_register','fn_customizer_settings');

?>