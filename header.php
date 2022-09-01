<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <link href="bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<nav>
    <?php
    if(has_nav_menu("header-menu")){
        wp_nav_menu(array("theme_location"=>"header-menu"));
    }
    ?>
</nav>
    
<header class="header">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a></h1>
    <h3><?php bloginfo('description');?></h3>
</header>

<main id="main">
    
