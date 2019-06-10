<?php;
require_once('config/db.php');

function delete_driver(){
	$id=$_REQUEST['id'];
	$query = "DELETE FROM new_record WHERE id=$id"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error());
	header("Location: drivers.php"); 
}


function register_new_user(){
	// If form submitted, insert values into the database.
	if (isset($_REQUEST['username'])){
		// removes backslashes
		$firstname = stripslashes($_REQUEST['firstname']);
		//escapes special characters in a string
		$firstname = mysqli_real_escape_string($con,$firstname);
		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$trn_date = date("Y-m-d H:i:s");
		$query = "INSERT into `users` (firstname, lastname, username, password, email, trn_date)
		VALUES ('$firstname', '$lastname', '$username', '".md5($password)."', '$email', '$trn_date')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "<div class='form'>
			<h3>You are registered successfully.</h3>
			<br/>Click here to <a href='../login'>Login</a></div>";
		}
	}
return;
}

?>