<html>
    <head>
        <script src="js/Admin1.js"></script>
    </head>

<body>
    <?php 

        require 'Config.php';

        $sql = "SELECT ID, full_name,email,message FROM contact";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            echo"<table border='2'><tr><th>Full Name</th><th>Email</th><th>Message</th><th>Edit</th><th>Delete</th></tr>";
            //output data of each row
            while($row=$result->fetch_assoc()){
                echo"<tr><td>".$row["full_name"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td>"."<td><input type='button' 
                name='Edit' value='Update' ID='contact' onclick=\"editpage('contact')\"></td><td><a href=contact_delete.php?delete=".$row["ID"]." 
                onclick=\"return confirm('Are you sure?)\">Delete</a></td></tr>";
            }
            echo"</table>"; 
        }else {
            echo "0 results";
        }

    
    ?>
</body>
</html>