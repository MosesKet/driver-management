<?php
include("config/db.php");

$id=$_REQUEST['id'];
$query = "DELETE FROM drivers WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: drivers.php"); 
?>