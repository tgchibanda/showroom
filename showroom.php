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
        
    echo "
    <div class='container'>
    <hr>
    <h1>Vehicle Listings</h1>
    <hr>
    <div class='row'>
        <div class='col-md-2'>
        <label for='filter'><h2 class='text-success'>Filter</h2></label>
            <div class='form-group'>
                <label for='show_price'>Price Sort</label>
                    <select class='form-control' id='show_price'>
                    <option value='0'> All </option>
                    <option value='10 000.00'> Less Than 10 000 </option>
                        <option value='20 000.00'> Less Than 20 000 </option>
                    </select>
            </div>


            <div class='form-group'>
                <label for='show_make'>Make</label>
                <select class='form-control' id='show_make'>
                        <option value='x'> All </option>
                        <option>Nissan</option>
                        <option>Ford</option>
                        <option value='VW'>VW</option>
                        <option>Toyota</option>
                    </select>
            </div>

            <div class='form-group'>
                <label for='year'>Year</label>
                    <select class='form-control' id='show_year'>
                        <option value='0'> All </option>
                        <option>2000</option>
                        <option>2001</option>
                    </select>
            </div>


            <div class='form-group'>
                <label for='show_body_type'>Body Type</label>
                <select class='form-control' id='show_body_type'>
                        <option value='x'> All </option>
                        <option>Sedan</option>
                        <option>SUV</option>
                    </select>
            </div>


            <div class='form-group'>
                <label for='show_transmission'>Transmission</label>
                <select class='form-control' id='show_transmission'>
                        <option value='x'> All </option>
                        <option>Manual</option>
                        <option>Automatic</option>
                    </select>
            </div>

            <div class='form-group'>
                <label for='show_engine_capacity'>Engine Capacity</label>
                <select class='form-control' id='show_engine_capacity'>
                        <option value='0'> All </option>
                        <option value='1'>1 litre</option>
                        <option value='2'>2 litre</option>
                    </select>
            </div>

            <div class='form-group'>
                <label for='show_fuel'>Fuel</label>
                <select class='form-control' id='show_fuel'>
                        <option value='x'> All </option>
                        <option>Petrol</option>
                        <option>Diesel</option>
                    </select>
            </div>

            <div class='form-group'>
                <label for='show_location'>Location</label>
                <select class='form-control' id='show_location'>
                        <option value='x'> All </option>
                        <option>Pretoria</option>
                        <option>Capetown</option>
                    </select>
            </div>


            <div class='form-group'>
                <button class='btn btn-success' id='show_search'>Filter Search</button>
            </div>
        </div>";

        echo "
        <div class='col-md-10'>
        <div class='row'>
        <div class='col-md-4'>
            
        </div>

        <div class='col-md-4'>
            
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

        </div>

        <div id='results'></div>
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