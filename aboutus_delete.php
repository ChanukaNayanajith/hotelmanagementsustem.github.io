<?php 

    require 'Config.php';

    if(isset($_GET['delete'])){
        $delete_ID = $_GET['delete'];

        $sqldelete = "DELETE FROM about WHERE ID = '$delete_ID'";

        if (mysqli_query($conn,$sqldelete))
        {
            header("location:aboutus_select.php");
        }
        else {
            echo "<script type = 'text/javascript'>
            alert ('Not deleted')
            </script>";
        }
    }


?>