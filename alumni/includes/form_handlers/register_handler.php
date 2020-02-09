<?php
//Declaring variables to prevent errors
$name = ""; //First name
$email = ""; //Last name
$phone = "";
$course = "";
$message = ""; //email

$error_array = array(); //Holds error messages

if(isset($_POST['alumini_button'])){

	//Registration form values

	//First name
	$name = strip_tags($_POST['name']); //Remove html tags
	
	$_SESSION['name'] = $name; //Stores first name into session variable


	
	$email = strip_tags($_POST['email']); 

	$_SESSION['email'] = $email; 


		//First name
	$phone = strip_tags($_POST['phone']); //Remove html tags
	
	$_SESSION['phone'] = $phone; //Stores first name into session variable


	$course = strip_tags($_POST['course']); //Remove html tags
	
	$_SESSION['course'] = $course; 

	$message = strip_tags($_POST['message']); //Remove html tags
	
	$_SESSION['message'] = $message; 
	



		$query = mysqli_query($con, "INSERT INTO alumini VALUES ('', '$name', '$email', '$phone', '$course', '$message')");

		array_push($error_array, "<span style='color: #14C800;'>Submitted");

		//Clear session variables 
		$_SESSION['name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['message'] = "";
		$_SESSION['phone'] = "";
		$_SESSION['course'] = "";
	
	}


?>