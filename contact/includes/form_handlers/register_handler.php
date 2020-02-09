<?php
//Declaring variables to prevent errors
$name = ""; //First name
$email = ""; //Last name
$message  = ""; //email

$error_array = array(); //Holds error messages

if(isset($_POST['register_button'])){

	//Registration form values

	//First name
	$name = strip_tags($_POST['name']); //Remove html tags
	
	$_SESSION['name'] = $name; //Stores first name into session variable


	
	$email = strip_tags($_POST['email']); 

	$_SESSION['email'] = $email; 



	$message = strip_tags($_POST['message']); 

	$_SESSION['message'] = $message; 


	



		$query = mysqli_query($con, "INSERT INTO contact VALUES ('', '$name', '$email', '$message')")
		or die('error');

		

		//Clear session variables 
		$_SESSION['name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['message'] = "";
	
	}


?>