<?php

//Add scripts

function bottom_scripts(){
    // Add main css
    wp_enqueue_style('show-main-style', plugins_url().'/showroom/css/style.css');

    // Add main js
    wp_enqueue_script('show-main-script', plugins_url().'/showroom/js/main.js');

    
   
}

function top_scripts(){
    // Add external css
    wp_register_style( 'my-stylesheet', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-stylesheet' );


    // Add external script "google script"
    wp_register_script('bootstrap', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('bootstrap');

    wp_register_script('bootstrap2', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap2');

    // Add jquery js
    wp_register_script('jquery-script', plugins_url().'/showroom/js/jquery.js');
    wp_enqueue_script('jquery-script');

    wp_register_script('sweetalert.min', plugins_url().'/showroom/js/sweetalert.min.js');
    wp_enqueue_script('sweetalert.min');
   
}


add_action('wp_footer', 'bottom_scripts'); //Add scripts to footer
add_action('wp_enqueue_scripts', 'top_scripts'); //Add to top