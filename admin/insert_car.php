<?php 


include('connection.php');
$hid_id = $_POST['hid_id'];
//$hid_img = $_POST['hid_img'];

$title = $_POST['title'];
$category = $_POST['category1'];
$desciption = $_POST['description'];
$fire = $_POST['fire'];
$water = $_POST['water'];
$earth = $_POST['earth'];
$air = $_POST['air'];
$examples = $_POST['examples'];
$thoughts = $_POST['thoughts'];
$earth_qns = $_POST['earth_qns'];
$air_qns = $_POST['air_qns'];
$water_qns = $_POST['water_qns'];
$fire_qns = $_POST['fire_qns'];
$status = $_POST['status'];



//$target_dir = "upload/cars/";
//$target_file = $target_dir . basename($_FILES["car_img"]["name"]);
//
//$move = move_uploaded_file($_FILES["car_img"]["tmp_name"], $target_file);


if(empty($hid_id)){
$query = "INSERT INTO mapstm (title,category1,description,fire,water,earth,air,examples,thoughts,earth_qns,air_qns,water_qns,fire_qns,status) VALUES ('$title','$category','$description','$fire','$water','$earth','$air','$examples','$thoughts','$earth_qns','$air_qns','$water_qns','$fire_qns','$status')";
$res = mysqli_query($con,$query)or die(mysqli_error($con));	
}else{
	if(!empty($status)){
		$query = "UPDATE mapstm SET title = '$title',category1 = '$category',description = '$description',fire = '$fire',water = '$water',air = '$air',earth = '$earth',examples = '$examples',thoughts = '$thoughts',earth_qns = '$earth_qns',air_qns = '$air_qns',water_qns = '$water_qns',fire_qns = '$fire_qns',status = '$status' WHERE id = '$hid_id'";
		$exe = mysqli_query($con,$query)or die(mysqli_error($con));
	}else{
		$query = "UPDATE mapstm SET title = '$title',category1 = '$category',description = '$description',fire = '$fire',water = '$water',air = '$air',earth = '$earth',examples = '$examples',thoughts = '$thoughts',earth_qns = '$earth_qns',air_qns = '$air_qns',water_qns = '$water_qns',fire_qns = '$fire_qns',status = '$status' WHERE id = '$hid_id'";
		$exe = mysqli_query($con,$query)or die(mysqli_error($con));
	}
}
header("Location: maps.php");


?>