<?php

//Add scripts

function clubs_bottom_scripts(){
    // Add main css
    wp_enqueue_style('show-main-style', plugins_url().'/clubs/css/style.css');

    // Add main js
    wp_enqueue_script('show-main-script', plugins_url().'/clubs/js/main.js');

    
   
}

function clubs_top_scripts(){
  
    // Add jquery js
    wp_register_script('jquery-script', plugins_url().'/clubs/js/jquery.js');
    wp_enqueue_script('jquery-script');

    wp_register_script('sweetalert.min', plugins_url().'/clubs/js/sweetalert.min.js');
    wp_enqueue_script('sweetalert.min');
   
}


add_action('wp_footer', 'clubs_bottom_scripts'); //Add scripts to footer
add_action('wp_enqueue_scripts', 'clubs_top_scripts'); //Add to top