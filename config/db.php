<?php
$con = mysqli_connect("localhost","driver","driver","driver");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function connection($con){
	$con = mysqli_connect("localhost","driver","driver","driver");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $con;
}
?>