<?php 

    require 'Config.php';

    $message = $_POST['text'];
    $email = $_POST['email'];

    $sql = "UPDATE about SET message='$message' , email='$email'";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert ('Successfully inserted!');
        window.location='html/aboutus.html';
        </script>";
    }

    else {
        echo"Error:" .$sql. "<br>". mysqli_error($conn);
    }

    mysqli_close($conn);

?>