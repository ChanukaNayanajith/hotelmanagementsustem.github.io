<html>
    <head>
        <script src="js/Admin1.js"></script>
    </head>

<body>
    <?php 

        require 'Config.php';

        $sql = "SELECT ID,message,email FROM about";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            echo"<table border='2'><tr><th>Message</th><th>Email</th><th>Edit</th><th>Delete</th></tr>";

            //Output data of each row

            while($row=$result->fetch_assoc()){
                echo"<tr><td>".$row["message"]."</td><td>".$row["email"]."</td>"."<td><input type='button'
                name='Edit' value='Update' ID='about' onclick=\"editpage('about')\"></td><td><a href=aboutus_delete.php?delete=".$row["ID"]."
                onclick=\"return confirm('Are you sure?)\">Delete</a></td><tr>";
            }

            echo"</table>";

        } else {
            echo "0 results";
        }
    
    
    ?>
</body>
</html>