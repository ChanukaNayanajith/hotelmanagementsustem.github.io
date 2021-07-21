<?php 
	require 'Config.php'; 

	$name = $_POST["fname"];
	$email = $_POST["email"];
	$message = $_POST["text"];

	$sql = "INSERT INTO contact(ID,full_name,email,message)VALUES('','$name','$email','$message')";

	if(mysqli_query($conn,$sql)){
		echo "<script> alert ('Record inserted successfully!')</script>";
	
	}
	else{
		echo "<script> alert ('Error in inserted records')</script>";
	}
	
	mysqli_close($conn);
?>