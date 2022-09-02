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

<header class="p-3 mb-2  text-white header">
    <div class="row">
      <div class="col-md-3 col-9 p-2">
        <h2 class="title"><a href="#" class="text-light">
        <?php 
        if(function_exists("the_custom_logo")){
          the_custom_logo();
        }else{
         bloginfo('name');
        }
        ?></a></h2>
      </div>

      <div class="search col-md-3 col-9 p-2">
        <?php
        //get the searchform.php template file using get_search_form() template tag
         get_search_form(); 
         ?>
        
      </div>

      <div class="col-md-6 col-3">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <?php
                  //display nav-menu
                  if(has_nav_menu("primary-menu")){
                    wp_nav_menu(array(
                      'theme_location'=>'primary-menu',
                      'container'=>'',
                      'items_wrap'=>'<ul class="navbar-nav ms-auto">%3$s</ul>'
                    ));
                  }
              ?>
              <!-- <ul class="navbar-nav ms-auto">
                <li class="nav-item active">  
                  <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="resume.html">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="experience.html">Experience</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="contact.html">Contact me</a>
                </li>
              </ul> -->
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

<main id="main">
    
