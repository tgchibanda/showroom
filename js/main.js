   
console.log('Showroom Javascript loaded');



function createHTML(APIData){
    var layout = '';
        for(i = 0; i < APIData.length; i++){


            layout+= "<div class='row'>";
            layout+= "<div class='col-md-4'><img width='350' height='250'src='"+ APIData[i].vehicle_main_picture +"'></div>";
            layout+= "<div class='col-md-6'><b>"+ APIData[i].vehicle_name + "</b><p>"+ APIData[i].vehicle_description + "</p></div>";
            layout+= "<div class='col-md-2'><p class='text-success'><b>R" + APIData[i].vehicle_price +"</b></p>";
            layout+= "<button class='btn btn-success' id='vehicle_id" + APIData[i].id + "''" + APIData[i].vehicle_name + " data-id='" + APIData[i].id + "''>View Profile</button></div>";
            layout+= "</div><hr>";

            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><p><b>State</b></p>"+ APIData[i].vehicle_state +"</div>";
            layout+= "<div class='col-md-2'><p><b>Year</b></p>"+ APIData[i].vehicle_year +"</div>";
            layout+= "<div class='col-md-2'><p><b>Miliage</b></p>"+ APIData[i].vehicle_miliage +"</div>";
            layout+= "<div class='col-md-2'><p><b>Type</b></p>"+ APIData[i].vehicle_type +"</div>";
            layout+= "<div class='col-md-2'><p><b>Transmission</b></p>"+ APIData[i].vehicle_transmission +"</div>";
            layout+= "<div class='col-md-2'><p><b>Engine</b></p>"+ APIData[i].vehicle_engine_capacity +"litre</div></div><hr>";
            
            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture1 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture2 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture3 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture4 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture5 +"'></div>";
            layout+= "</div><hr><br><br>";
            
        }
    results.innerHTML = layout;
}


function profileHTML(APIData){
    var layout = '';
        for(i = 0; i < APIData.length; i++){


            layout+= "<hr><div class='row'>";
            layout+= "<div class='col-md-4'><b>"+ APIData[i].vehicle_name +"</b></div>";
            layout+= "<div class='col-md-6'></div>";
            layout+= "<div class='col-md-2'><p class='text-success'><b>R" + APIData[i].vehicle_price +"</b></p></div>";
            layout+= "</div><hr>";

            
            layout+= "<div class='row'>";
            layout+= "<div class='col-md-6'><img width='650' height='350'src='"+ APIData[i].vehicle_main_picture +"'></div>";
            layout+= "<div class='col-md-6'><form method='post' action=''>";
                                        
            layout+= "<div class='row'>";
                layout+= "<div class='col-md-6'><div class='form-group'>";
                        layout+= "<input type='text' name='form_name' id='form_name' placeholder='First Name' class='form-control' required>";
                        layout+= "</div>";
                        layout+= "<div class='form-group label-floating'>";
                        layout+= " <input type='text' name='form_contact' placeholder='Contact' id='form_contact' class='form-control' required>";
                        layout+= " </div>";
                        layout+= "<div class='form-group label-floating'>";
                        layout+= " <input type='email' name='form_email' id='form_email' placeholder='Email' class='form-control' required>";
                        layout+= " </div>";
                        layout+= "</div>";
                        layout+= "<div class='col-md-6'>";
                        layout+= "<div class='form-group label-floating'>";
                        layout+= "<textarea class='form-control' id='form_message' name='form_message' placeholder='Enter Your Message!' required rows='2'></textarea>";
                        layout+= "</div><button name='send_message' id='send_message' class='btn btn-success pull-right'>Send Enquiry</button>";
                        layout+= "</div>";


                        layout+= "</div>";
            
                        layout+= "";
         
                        layout+= "</form>";
        
        layout+= '</div>';
            layout+= "</div><hr>";

            
            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture1 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture2 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture3 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture4 +"'></div>";
            layout+= "<div class='col-md-2'><img width='350' height='250'src='"+ APIData[i].vehicle_picture5 +"'></div>";
            layout+= "</div><hr>";

            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><p><b>State</b></p>"+ APIData[i].vehicle_state +"</div>";
            layout+= "<div class='col-md-2'><p><b>Year</b></p>"+ APIData[i].vehicle_year +"</div>";
            layout+= "<div class='col-md-2'><p><b>Miliage</b></p>"+ APIData[i].vehicle_miliage +"</div>";
            layout+= "<div class='col-md-2'><p><b>Type</b></p>"+ APIData[i].vehicle_type +"</div>";
            layout+= "<div class='col-md-2'><p><b>Transmission</b></p>"+ APIData[i].vehicle_transmission +"</div>";
            layout+= "<div class='col-md-2'><p><b>Engine</b></p>"+ APIData[i].vehicle_engine_capacity +"litre</div></div><hr>";
           
            layout+= "<div class='row'><div class='col-md-12'><b>Vehicle Details</b><p>"+ APIData[i].vehicle_description + "</p></div></div>";
            
            layout+= "<div class='row'><div class='col-md-12'><b>More Details</b></div></div><hr>";
            
            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><p><b>Model</b></p>"+ APIData[i].vehicle_model +"</div>";
            layout+= "<div class='col-md-2'><p><b>Color</b></p>"+ APIData[i].vehicle_color +"</div>";
            layout+= "<div class='col-md-2'><p><b>Location</b></p>"+ APIData[i].vehicle_location +"</div>";
            layout+= "<div class='col-md-2'><p><b>Doors</b></p>"+ APIData[i].vehicle_doors +"</div>";
            layout+= "<div class='col-md-2'><p><b>Drive</b></p>"+ APIData[i].vehicle_drive +"WD</div>";
            layout+= "<div class='col-md-2'><p><b>Weight</b></p>"+ APIData[i].vehicle_weight +"kgs</div></div><hr>";
           
            
        }
        results.innerHTML = layout;
}

var results = document.getElementById("results");
var profile_data = document.getElementById("profile_data");

var show_search = document.getElementById("show_search");
var send_message = document.querySelector("#send_message");
var show_profile = document.getElementById("show_profile");
var vehicle_make = document.getElementById("show_make");
var vehicle_price = document.getElementById("show_price");
var vehicle_year = document.getElementById("show_year");
var vehicle_body_type = document.getElementById("show_body_type");
var vehicle_transmission = document.getElementById("show_transmission");
var vehicle_engine_capacity = document.getElementById("show_engine_capacity");
var vehicle_fuel = document.getElementById("show_fuel");
var vehicle_location = document.getElementById("show_location");
var form_name = document.getElementById("form_name");
var form_contact = document.getElementById("form_contact");
var form_email = document.getElementById("form_email");
var form_message = document.getElementById("form_message");


showData();

function showData(){

    $.ajax({
        type: "GET",
        url: "http://localhost/takunda/wpplugin/wp-content/plugins/showroom/slim2/api/vehicles",
        success: function(response){
            var data = JSON.parse(response);
            console.log(data);
            createHTML(data);
        }
    });
}


$(document).on('click', '[id^="vehicle_id"]', function () {

    $vehicle = $(this).data("id");
    $.ajax({
        type: "GET",
        url: "http://localhost/takunda/wpplugin/wp-content/plugins/showroom/slim2/api/vehicle/"+ $vehicle,
        success: function(response){
            var info = JSON.parse(response);
            console.log("The vehicle id is "+$vehicle);
            console.log(info);
            profileHTML(info);
        }
    });
    
});



if(show_search){
    show_search.addEventListener('click', function(){
        var yea = {
                vehicle_make: vehicle_make.value,
                vehicle_price: vehicle_price.value,
                vehicle_year: vehicle_year.value,
                vehicle_body_type: vehicle_body_type.value,
                vehicle_transmission: vehicle_transmission.value,
                vehicle_engine_capacity: vehicle_engine_capacity.value,
                vehicle_fuel: vehicle_fuel.value,
                vehicle_location: vehicle_location.value
        };

        $.ajax({
            type: "GET",
            url: "http://localhost/takunda/wpplugin/wp-content/plugins/showroom/slim2/api/search",
            data: yea,
            success: function(response){
                var info = JSON.parse(response);
                console.log(yea);
                console.log(info);
                createHTML(info);
            }
        });
    });
}

if(send_message){
    send_message.addEventListener('click', function(){
    console.log("Send message clicked");
    var message = {
        name: form_name.vlalue,
        contact: form_contact.value,
        email: form_email.value,
        message: form_message.value,
};

 $.ajax({
    type: 'POST',
    url : "table_answer.php",
    data: message,
    success : function(data){

            swal("Information Submitted!", "Correct!", "success");
        },
        error: function(){
            swal("Information NOT Submitted!", "Error Inserting!", "error");
        }
    });

   //e.stopPropagation();
    
    
});

}


