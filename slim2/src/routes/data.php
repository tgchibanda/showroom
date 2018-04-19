<?php

function conn(){
    $conn = mysqli_connect("localhost","WMBOMBI-10-N.ogh.co.za","Password101","showroom")or die(mysqli_error());
    return $conn;
}

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App;

//Get all clubs

$app->get('/api/clubs', function(Request $request, Response $response){
	$sql = "SELECT
			   *
			   from clubs";
	
	try{
		//Get database object
		$db = new db();
		//Connect
		$db = $db->connect();
		
		$stmt = $db->query($sql);
		$engagements = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($engagements);
	}
	catch(PDOException $e){
		echo '{"error": {"text": '.$e->getMessage().'}}';
	}
});


//Get one club
$app->get('/api/club/{id}', function(Request $request, Response $response){

	$id = $request->getAttribute('id');

	$sql = "SELECT
			   *
			   from clubs where id='$id'";
	
	try{
		//Get database object
		$db = new db();
		//Connect
		$db = $db->connect();
		
		$stmt = $db->query($sql);
		$engagements = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($engagements);
	}
	catch(PDOException $e){
		echo '{"error": {"text": '.$e->getMessage().'}}';
	}
});

//Search
$app->get('/api/search', function(Request $request, Response $response){
	$vehicle_make = $request->getParam('vehicle_make');
	$vehicle_price = $request->getParam('vehicle_price');
	$vehicle_year = $request->getParam('vehicle_year');
	$vehicle_body_type = $request->getParam('vehicle_body_type');
	$vehicle_transmission = $request->getParam('vehicle_transmission');
	$vehicle_engine_capacity = $request->getParam('vehicle_engine_capacity');
	$vehicle_fuel = $request->getParam('vehicle_fuel');
	$vehicle_location = $request->getParam('vehicle_location');

	

	if($vehicle_make!='x'){
		$vm = " and vehicle_make = '$vehicle_make'";
	}
	else{
		$vm = "";
	}

	if($vehicle_price!=0){
		$vp = " and vehicle_price < '$vehicle_price'";
	}
	else{
		$vp = "";
	}

	if($vehicle_year!=0){
		$vy = " and vehicle_year = '$vehicle_year'";
	}
	else{
		$vy = "";
	}

	if($vehicle_body_type!='x'){
		$vbt = " and vehicle_body_type = '$vehicle_body_type'";
	}
	else{
		$vbt = "";
	}

	if($vehicle_transmission!='x'){
		$vt = " and vehicle_transmission = '$vehicle_transmission'";
	}
	else{
		$vt = "";
	}

	if($vehicle_engine_capacity!=0){
		$vec = " and vehicle_engine_capacity = '$vehicle_engine_capacity'";
	}
	else{
		$vec = "";
	}

	if($vehicle_fuel!='x'){
		$vf = " and vehicle_fuel = '$vehicle_fuel'";
	}
	else{
		$vf = "";
	}

	if($vehicle_location!='x'){
		$vl = " and vehicle_location = '$vehicle_location'";
	}
	else{
		$vl = "";
	}
	

	$sql = "SELECT
	*
FROM
	clubs 
WHERE
	id!='0'$vm$vp$vy$vbt$vec$vf$vl$vt
";
	
	try{
		//Get database object
		$db = new db();
		//Connect
		$db = $db->connect();
		
		$stmt = $db->query($sql);
		$engagements = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		//echo json_encode($sql);
		echo json_encode($engagements);

	}
	catch(PDOException $e){
		echo '{"error": {"text": '.$e->getMessage().'}}';
	}
});


//Add vehicle

$app->post('/api/club', function(Request $request, Response $response){
			
			$club_name = $request->getParam('club_name');
			$vehicle_make = $request->getParam('vehicle_make');
			$vehicle_model = $request->getParam('vehicle_model');
			$vehicle_body_type = $request->getParam('vehicle_body_type');
			$vehicle_miliage = $request->getParam('vehicle_miliage');
			$vehicle_year = $request->getParam('vehicle_year');

			$vehicle_price = $request->getParam('vehicle_price');
			$vehicle_color = $request->getParam('vehicle_color');
			$vehicle_transmission = $request->getParam('vehicle_transmission');
			$vehicle_fuel = $request->getParam('vehicle_fuel');
			$vehicle_type = $request->getParam('vehicle_type');
			$vehicle_main_picture = $request->getParam('vehicle_main_picture');

			$vehicle_picture1 = $request->getParam('vehicle_picture1');
			$vehicle_picture2 = $request->getParam('vehicle_picture2');
			$vehicle_picture3 = $request->getParam('vehicle_picture3');
			$vehicle_picture4 = $request->getParam('vehicle_picture4');
			$vehicle_picture5 = $request->getParam('vehicle_picture5');
			$vehicle_location = $request->getParam('vehicle_location');
			$vehicle_description = $request->getParam('vehicle_description');
			$vehicle_doors = $request->getParam('vehicle_doors');
			$vehicle_drive = $request->getParam('vehicle_drive');
			$vehicle_weight = $request->getParam('vehicle_description');
	 
	 $sql = "insert into vehicles (club_name, vehicle_make, vehicle_model, vehicle_body_type, vehicle_miliage, vehicle_year,
								vehicle_price, vehicle_color, vehicle_transmission, vehicle_fuel, vehicle_type, vehicle_main_picture,
								vehicle_picture1, vehicle_picture2, vehicle_picture3, vehicle_picture4, vehicle_picture5, vehicle_description, vehicle_location, vehicle_doors, vehicle_drive, vehicle_weight) 

								values(:club_name, :vehicle_make, :vehicle_model, :vehicle_body_type, :vehicle_miliage, :vehicle_year,
								:vehicle_price, :vehicle_color, :vehicle_transmission, :vehicle_fuel, :vehicle_type, :vehicle_main_picture,
								:vehicle_picture1, :vehicle_picture2, :vehicle_picture3, :vehicle_picture4, :vehicle_picture5, :vehicle_description, :vehicle_location, :vehicle_doors, :vehicle_drive, :vehicle_weight)";
								
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 
		 $stmt->bindParam(':club_name', $club_name);
		 $stmt->bindParam(':vehicle_make', $vehicle_make);
		 $stmt->bindParam(':vehicle_model', $vehicle_model);
		 $stmt->bindParam(':vehicle_body_type', $vehicle_body_type);
		 $stmt->bindParam(':vehicle_miliage', $vehicle_miliage);
		 $stmt->bindParam(':vehicle_year', $vehicle_year);

		 $stmt->bindParam(':vehicle_price', $vehicle_price);
		 $stmt->bindParam(':vehicle_color', $vehicle_color);
		 $stmt->bindParam(':vehicle_transmission', $vehicle_transmission);
		 $stmt->bindParam(':vehicle_fuel', $vehicle_fuel);
		 $stmt->bindParam(':vehicle_type', $vehicle_type);
		 $stmt->bindParam(':vehicle_main_picture', $vehicle_main_picture);

		 $stmt->bindParam(':vehicle_picture1', $vehicle_picture1);
		 $stmt->bindParam(':vehicle_picture2', $vehicle_picture2);
		 $stmt->bindParam(':vehicle_picture3', $vehicle_picture3);
		 $stmt->bindParam(':vehicle_picture4', $vehicle_picture4);
		 $stmt->bindParam(':vehicle_picture5', $vehicle_picture5);
		 $stmt->bindParam(':vehicle_description', $vehicle_description);
		 $stmt->bindParam(':vehicle_location', $vehicle_location);
		 $stmt->bindParam(':vehicle_doors', $vehicle_doors);
		 $stmt->bindParam(':vehicle_drive', $vehicle_drive);
		 $stmt->bindParam(':vehicle_weight', $vehicle_weight);
		 
		 $stmt->execute();
		 
		 echo json_encode('Vehicle Registered Successfully');
	 }
	 catch(PDOException $e){
		 echo json_encode('{"error": {"text": '.$e->getMessage().'}}');
	 }
});


//Update vehicle

$app->put('/api/vehicle/update/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');

	 		$club_name = $request->getParam('club_name');
			$vehicle_make = $request->getParam('vehicle_make');
			$vehicle_model = $request->getParam('vehicle_model');
			$vehicle_body_type = $request->getParam('vehicle_body_type');
			$vehicle_miliage = $request->getParam('vehicle_miliage');
			$vehicle_year = $request->getParam('vehicle_year');

			$vehicle_price = $request->getParam('vehicle_price');
			$vehicle_color = $request->getParam('vehicle_color');
			$vehicle_transmission = $request->getParam('vehicle_transmission');
			$vehicle_fuel = $request->getParam('vehicle_fuel');
			$vehicle_type = $request->getParam('vehicle_type');
			$vehicle_main_picture = $request->getParam('vehicle_main_picture');

			$vehicle_picture1 = $request->getParam('vehicle_picture1');
			$vehicle_picture2 = $request->getParam('vehicle_picture2');
			$vehicle_picture3 = $request->getParam('vehicle_picture3');
			$vehicle_picture4 = $request->getParam('vehicle_picture4');
			$vehicle_picture5 = $request->getParam('vehicle_picture5');
			$vehicle_location = $request->getParam('vehicle_location');
			$vehicle_description = $request->getParam('vehicle_description');
	 
			$vehicle_doors = $request->getParam('vehicle_doors');
			$vehicle_drive = $request->getParam('vehicle_drive');
			$vehicle_weight = $request->getParam('vehicle_description');
	 
			
	 $sql = "update vehicles set club_name =:club_name, vehicle_make =:vehicle_make, vehicle_model=:vehicle_model, vehicle_body_type=:vehicle_body_type, vehicle_miliage=:vehicle_miliage, vehicle_year=:vehicle_year,
	 vehicle_price=:vehicle_price, vehicle_color=:vehicle_color, vehicle_transmission=:vehicle_transmission, vehicle_fuel=:vehicle_fuel, vehicle_type=:vehicle_type, vehicle_main_picture=:vehicle_main_picture,
	 vehicle_picture1=:vehicle_picture1, vehicle_picture2=:vehicle_picture2, vehicle_picture3=:vehicle_picture3, vehicle_picture4=:vehicle_picture4, vehicle_picture5=:vehicle_picture5, vehicle_description=:vehicle_description, vehicle_location=:vehicle_location, vehicle_doors=:vehicle_doors, vehicle_drive=:vehicle_drive, vehicle_weight=:vehicle_weight
	  where id = '$id'";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 
		 $stmt->bindParam(':club_name', $club_name);
		 $stmt->bindParam(':vehicle_make', $vehicle_make);
		 $stmt->bindParam(':vehicle_model', $vehicle_model);
		 $stmt->bindParam(':vehicle_body_type', $vehicle_body_type);
		 $stmt->bindParam(':vehicle_miliage', $vehicle_miliage);
		 $stmt->bindParam(':vehicle_year', $vehicle_year);

		 $stmt->bindParam(':vehicle_price', $vehicle_price);
		 $stmt->bindParam(':vehicle_color', $vehicle_color);
		 $stmt->bindParam(':vehicle_transmission', $vehicle_transmission);
		 $stmt->bindParam(':vehicle_fuel', $vehicle_fuel);
		 $stmt->bindParam(':vehicle_type', $vehicle_type);
		 $stmt->bindParam(':vehicle_main_picture', $vehicle_main_picture);

		 $stmt->bindParam(':vehicle_picture1', $vehicle_picture1);
		 $stmt->bindParam(':vehicle_picture2', $vehicle_picture2);
		 $stmt->bindParam(':vehicle_picture3', $vehicle_picture3);
		 $stmt->bindParam(':vehicle_picture4', $vehicle_picture4);
		 $stmt->bindParam(':vehicle_picture5', $vehicle_picture5);
		 $stmt->bindParam(':vehicle_description', $vehicle_description);
		 $stmt->bindParam(':vehicle_location', $vehicle_location);
		 $stmt->bindParam(':vehicle_doors', $vehicle_doors);
		 $stmt->bindParam(':vehicle_drive', $vehicle_drive);
		 $stmt->bindParam(':vehicle_weight', $vehicle_weight);
		 
		 $stmt->execute();
		 
		 echo '{"notice": {"Text": "Vehicle Updated"}}';
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});


//Delete single customer

$app->delete('/api/vehicle/delete/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');
	
	 $sql = "delete from vehicles where id = $id";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 $stmt->execute();
		 $db = null;
		 
		 echo '{"notice": {"Text": "Vehicle deleted"}}';
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});

?>
