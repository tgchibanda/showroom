<?php

//Add scripts

function show_add_scripts(){
    // Add main css
    wp_enqueue_style('show-main-style', plugins_url().'/showroom/css/style.css');

    // Add main js
    wp_enqueue_script('show-main-script', plugins_url().'/showroom/js/main.js');

   
}

add_action('wp_enqueue_scripts', 'show_add_scripts');