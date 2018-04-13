<?php
/*
Plugin Name: Showroom
Description: This is a plugin that gets data from an API to display available vehicles
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

add_shortcode( 'tg_showroom', 'showroom_shortcode' );


// The callback function that will replace 
function showroom_shortcode() {
    ob_start();
    custom_showroom_function();// Get showroom layout
    return ob_get_clean();
}

function showroom_layout( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio ) {
        echo '
        <style>
        div {
            margin-bottom:2px;
        }
         
        input{
            margin-bottom:4px;
        }
        </style>
        ';

        

    echo "
    <div class='container'>
    <hr>
    <h1>Featured Listings</h1>
    <hr>
    <div class='row'>
        <div class='col-md-2'>
            <div class='form-group'>
                <label for='year'>Make</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Make'>
            </div>

            <div class='form-group'>
                <label for='year'>Price</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Price'>
            </div>

            <div class='form-group'>
                <label for='year'>Year</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Year'>
            </div>

            <div class='form-group'>
                <label for='year'>Miliage</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Miliage'>
            </div>

            <div class='form-group'>
                <label for='year'>Body Type</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Body Type'>
            </div>

            <div class='form-group'>
                <label for='year'>Colour</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Colour'>
            </div>

            <div class='form-group'>
                <label for='year'>Transmission</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Transmission'>
            </div>

            <div class='form-group'>
                <label for='year'>Engine Capacity</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Engine Capacity'>
            </div>

            <div class='form-group'>
                <label for='year'>Fuel</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Fuel'>
            </div>

            <div class='form-group'>
                <label for='year'>Location</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Location'>
            </div>

            <div class='form-group'>
                <label for='year'>Vehicle Type</label>
                <input type='text' class='form-control' id='year' placeholder='Enter Vehile Type'>
            </div>
        </div>

        <div class='col-md-10'>
        <div class='row'>
        <div class='col-md-4'>
            <div class='form-group'>
                <label for='show_price'>Price Sort</label>
                    <select class='form-control' id='show_price'>
                    <option value='0'> All </option>
                    <option value='10000'> Less Than 10 000 </option>
                        <option value='20000'> Less Than 20 000 </option>
                    </select>
            </div>
        </div>

        <div class='col-md-4'>
            <div class='form-group'>
                <label for='show_listing_number'>Number Of Listings</label>
                <select class='form-control' id='show_listing_number'>
                    <option value='0'> All </option>
                    <option>1</option>
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                </select>
            </div>
        </div>

        <div class='col-md-4'>
            <div class='form-group'>
                <label for='show_id'>ID</label>
                <select class='form-control' id='searchButton'>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
        </div>

        <div id='results'></div>
        </div>
    </div>
    
    
  </div>

  
  
        

   </div>";


    
}


function custom_showroom_function() {
 
    showroom_layout(
        $username,
        $password,
        $email,
        $website,
        $first_name,
        $last_name,
        $nickname,
        $bio
        );
}