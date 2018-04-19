   
console.log('Showroom Javascript loaded');

var results = document.getElementById("results");
var profile_data = document.getElementById("profile_data");

var show_search = document.getElementById("show_search");
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
        url: "http://localhost/takunda/cps/golf/wp-content/plugins/clubs/slim2/api/clubs",
        success: function(response){
            var data = JSON.parse(response);
            console.log(data);
            createHTML(data);
        }
    });
}


function createHTML(APIData){
    var layout = '';
        for(i = 0; i < APIData.length; i++){



            layout+= "<div class='Logocontainer'>";
            layout+= "<img src='"+ APIData[i].vehicle_main_picture +"'>";
            layout+= "<div class='Logocontent'>";
            layout+= "<h1><b><p class='text-success'>"+ APIData[i].club_name + "</p></b></h1>";
            layout+= "<p>"+ APIData[i].vehicle_description +"</p>";
            layout+= "<button class='btn btn-success' id='vehicle_id" + APIData[i].id + "''" + APIData[i].club_name + " data-id='" + APIData[i].id + "''>View Profile</button></div>";
            layout+= "</div><hr>";

            layout+= "<div class='row'>";
            layout+= "<div class='col-md-2'><p><b>Province</b></p>"+ APIData[i].vehicle_state +"</div>";
            layout+= "<div class='col-md-2'><p><b>City</b></p>"+ APIData[i].vehicle_year +"</div>";
            layout+= "<div class='col-md-2'><p><b>Security</b></p>"+ APIData[i].vehicle_miliage +"</div>";
            layout+= "<div class='col-md-2'><p><b>Parking</b></p>"+ APIData[i].vehicle_type +"</div>";
            layout+= "<div class='col-md-2'><p><b>Type</b></p>"+ APIData[i].vehicle_transmission +"</div>";
            layout+= "<div class='col-md-2'><p><b>Rating</b></p>"+ APIData[i].vehicle_engine_capacity +"litre</div></div><hr>";
            
            
        }
    results.innerHTML = layout;
}


function profileHTML(APIData){
    var layout = '';
        for(i = 0; i < APIData.length; i++){


            layout+= "<hr><div class='row'>";
            layout+= "<div class='col-md-4'><b>"+ APIData[i].club_name +"</b></div>";
            layout+= "<div class='col-md-6'></div>";
            layout+= "<div class='col-md-2'><p class='text-success'><b>R" + APIData[i].vehicle_price +"</b></p></div>";
            layout+= "</div><hr>";

            
            layout+= "<div class='row'>";

            
            layout+= "<div class='col-md-6'><img src='"+ APIData[i].vehicle_main_picture +"'></div>";
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
                        layout+= "</div><button name='send_message' id='send_message" + APIData[i].id + "''" + APIData[i].club_name + " data-id='" + APIData[i].id + "'' class='btn btn-success pull-right'>Send Enquiry</button>";
                        layout+= "</div>";


                        layout+= "</div>";
            
                        layout+= "";
         
                        layout+= "</form>";
        
        layout+= '</div>';
            layout+= "</div><hr>";

            
            layout+= "<div class='row'>";
            layout+= "<div class='col-md-3'><img src='"+ APIData[i].vehicle_picture1 +"'></div>";
            layout+= "<div class='col-md-3'><img src='"+ APIData[i].vehicle_picture2 +"'></div>";
            layout+= "<div class='col-md-3'><img src='"+ APIData[i].vehicle_picture3 +"'></div>";
            layout+= "<div class='col-md-3'><img src='"+ APIData[i].vehicle_picture4 +"'></div>";

            layout+= "</div>";

            layout+= "<hr><div class='row'>";
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



$(document).on('click', '[id^="vehicle_id"]', function () {

    $vehicle = $(this).data("id");
    $.ajax({
        type: "GET",
        url: "http://localhost/takunda/cps/golf/wp-content/plugins/clubs/slim2/api/club/"+ $vehicle,
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
            url: "http://localhost/takunda/cps/golf/wp-content/plugins/clubs/slim2/api/search",
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

$(document).on('click', '[id^="send_message"]', function (e) {
    e.stopPropagation();
    console.log("Send message clicked");

    $vehicle = $(this).data("id");


    swal("Information Submitted!"+$vehicle, "Correct!", "success");
    


   
    
    
});






































var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}