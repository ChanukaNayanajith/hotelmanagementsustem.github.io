<?php 

    require 'Config.php';

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['text'];


    $sql = "UPDATE contact SET full_name='$name', email='$email', message='$message'";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert ('Successfully inserted!');
        window.location='html/contactus.html';
        </script>";
    }

    else {
        echo "Error:" .$sql. "<br>".mysqli_error($conn);
    }

    mysqli_close($conn);


?>