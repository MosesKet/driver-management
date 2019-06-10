<?php
include("config/db.php");

$vehicle=$_REQUEST['vehicle'];
$query = "UPDATE drivers SET contract='' WHERE vehicle=$vehicle";
$result = mysqli_query($con,$query) or die ( mysqli_error());
$quer = "UPDATE vehicles SET status=1 WHERE vehicle=$vehicle";
$result = mysqli_query($con,$quer) or die ( mysqli_error());
header("Location: drivers.php"); 
?>