<?php
//Declaring variables to prevent errors
$name = ""; //First name
$email = ""; //Last name
$contact  = ""; //email

$error_array = array(); //Holds error contacts

if(isset($_POST['register_button'])){

	//Registration form values

	//First name
	$name = strip_tags($_POST['name']); //Remove html tags
	
	$_SESSION['name'] = $name; //Stores first name into session variable


	
	$email = strip_tags($_POST['email']); 

	$_SESSION['email'] = $email; 



	$contact = strip_tags($_POST['contact']); 

	$_SESSION['contact'] = $contact; 


	



		$query = mysqli_query($con, "INSERT INTO ticket VALUES ('', '$name', '$email', '$contact')")
		or die('error');

		

		//Clear session variables 
		$_SESSION['name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['contact'] = "";
	
	}


?>