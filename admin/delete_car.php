<?php 
include('connection.php');
$id = str_replace("%27", "", $_GET['id']);
$query = "DELETE FROM mapstm where id = $id";
$res = mysqli_query($con,$query)or die(mysqli_error($con));
header('Location: maps.php');
?>