<?php
/*
Plugin Name: Clubs
Description: This is a plugin that gets data from an API to display available Clubs
Version: 1.0.0
Author: Takunda Geraldino Chibanda
*/

// Exit if accessed directly

if(!defined('ABSPATH')){
    exit;
}

//Load scripts

require_once(plugin_dir_path(__FILE__).'/includes/scripts.php');

//Load class

require_once(plugin_dir_path(__FILE__).'/includes/class.php');

// Register Widget
//function reg_form(){
//    register_widget('Reg_Form_Widget');
//}

//Hook in function

//add_action('widgets_init', 'reg_form');


// Register a new shortcode: [cr_custom_registration]

add_shortcode( 'tg_clubs', 'clubs_shortcode' );


// The callback function that will replace 
function clubs_shortcode() {
    ob_start();
    //clubs_slider();
    custom_clubs_function();// Get clubs layout
    return ob_get_clean();
}


function clubs_layout() {
        
    echo "
    <div class='container'>
   
    <div class='row'>
        ";

include 'sidebar_search.php';
include 'listings.php';

    echo "
    </div>

    </div>";


    
}


function custom_clubs_function() {
 
    clubs_layout();
}