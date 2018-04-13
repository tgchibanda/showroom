console.log('Showroom Javascript loaded');

var searchButton = document.getElementById("searchButton");
var results = document.getElementById("results");

showData();

function showData(){
    var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://localhost/takunda/wpplugin/wp-content/plugins/showroom/slim2/api/vehicles');
        ourRequest.onload = function(){
            if(ourRequest.status >=200 && ourRequest.status <400){
                var data = JSON.parse(ourRequest.responseText);
                console.log(data);
                createHTML(data);
            }
            else{
                console.log('Conneted to API but returned error');
            }
        };

        ourRequest.onerror = function(){
            console.log('Connection error');
        };

        ourRequest.send();
}



if(searchButton){
    searchButton.addEventListener('change', function(){
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://localhost/takunda/wpplugin/wp-content/plugins/showroom/slim2/api/vehicle/1');
        ourRequest.onload = function(){
            if(ourRequest.status >=200 && ourRequest.status <400){
                var data = JSON.parse(ourRequest.responseText);
                console.log(data);
                createHTML(data);
            }
            else{
                console.log('Conneted to API but returned error');
            }
        };

        ourRequest.onerror = function(){
            console.log('Connection error');
        };

        ourRequest.send();
    });
}

function createHTML(APIData){
    var layout = '';
        for(i = 0; i < APIData.length; i++){

           
            layout+= "<table class='table'>";
            layout+= "<tr>";
            layout+= "<td rowspan='3' width='30%'>";
            layout+= "<img class='img-rounded' width='350' src='"+ APIData[i].vehicle_main_picture +"'>";
            layout+= "</td>";
            layout+= "<td colspan='4'>";
            layout+= "<b>"+ APIData[i].vehicle_name + "</b>";
            layout+= "</td>";
            layout+= "<td>";
            layout+= "<p class='text-success'>";
            layout+= "<b>";
            layout+= APIData[i].vehicle_price +"</b></p>";
            layout+= "</td></tr><tr><td>"+ APIData[i].vehicle_state +"</td><td>"+ APIData[i].vehicle_year +"</td><td>"+ APIData[i].vehicle_miliage +"</td><td>"+ APIData[i].vehicle_type +"</td>";
            layout+= "<td></td></tr><tr><td><img width='350' height='250'src='"+ APIData[i].vehicle_picture1 +"' class='img-thumbnail'></td>";
            layout+= " <td><img width='350' height='250'src='"+ APIData[i].vehicle_picture2 +"'  class='img-thumbnail'>";
            layout+= " </td><td><img width='350' height='250'src='"+ APIData[i].vehicle_picture3 +"' class='img-thumbnail'></td><td><img width='350' height='250' src='"+ APIData[i].vehicle_picture4 +"' class='img-thumbnail'></td><td><img width='350' height='250'src='"+ APIData[i].vehicle_picture5 +"' class='img-thumbnail'></td></tr></table>";
            
        }
    results.innerHTML = layout;
}