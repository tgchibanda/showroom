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
  <div class='row'>
    <table class='table table-striped table-hover'>
    <tr>
    <td rowspan='3' width='35%'>
    
        <img 
        class='img-rounded'
        width='250' height='250'
        src='https://www.plm.automation.siemens.com/fr_fr/Images/seat-design-environment_tcm68-202967.jpg'
        >
    </td>
    <td colspan='4'>
    
            2006 Alfa Romeo 159
   
    </td>
    <td>

        R25 000.00

    </td>
    </tr>

    <tr>
    
    <td>
   
            Used Car
    
    </td>
    <td>
   
            Year: 2012
    
    </td>
    <td>
   
            Miliage 45, 454km
    
    </td>
    <td>
   
            Sedan
    
    </td>
    <td>

        

    </td>
    </tr>

    <tr>
    
    <td>
   
    <img 
    width='250' height='250'
    src='https://www.lectra.com/sites/lectra.com/files/styles/lectra_block_layer__964x600_/public/visuals/layers/solution_auto_car_interior.png?itok=1dBfCQEY'
    class='img-thumbnail'
    >
    
    </td>
    <td>

    <img 
    width='250' height='250'
    src='https://ae01.alicdn.com/kf/HTB1NM8cJFXXXXX6XFXXq6xXFXXXl.jpg'
    class='img-thumbnail'
    >

    </td>
    <td>

    <img 
    width='250' height='250'
    src='https://cache.bmwusa.com/cosy.arox?pov=walkaround&brand=WBBM&vehicle=18XU&client=byo&paint=P0475&fabric=FLCSW&sa=S02L4,S0302,S0403,S0420,S0488,S0508,S0524,S05A1,S0775,S07KL&angle=30&quality=100&resp=png&BKGND=TRANSPARENT&HEIGHT=18%&SHARP=100'
    class='img-thumbnail'
    >

    </td>
    <td>

    <img 
    width='250' height='250'
    src='https://www.lectra.com/sites/lectra.com/files/styles/lectra_block_layer__964x600_/public/visuals/layers/solution_auto_car_interior.png?itok=1dBfCQEY'
    class='img-thumbnail'
    >

    </td>
    <td>

    <img 
    width='250' height='250'
    src='https://www.lectra.com/sites/lectra.com/files/styles/lectra_block_layer__964x600_/public/visuals/layers/solution_auto_car_interior.png?itok=1dBfCQEY'
    class='img-thumbnail'
    >

    </td>
    </tr>

    </table>
  </div>
</div>
    ";
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