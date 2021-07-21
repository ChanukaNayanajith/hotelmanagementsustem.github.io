<?php
require 'Config.php';

$UserName=$_POST["UserName"];
$Password=$_POST["Password"];


$sql = "INSERT INTO login(UserName,Password)VALUES('$UserName','$Password')";

		if(mysqli_query($conn,$sql)){
			echo "<script type='text/javascript'>
			alert('successfully inserted');
			window.lacation='html/USER ACCOUNT.html';
			</script>";;
		}
		else{
			echo "Error:".$sql."<br>".mysqli_error($conn);
		}
?>