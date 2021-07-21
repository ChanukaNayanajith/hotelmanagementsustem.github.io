<html>
<head>
    <script src="js/Admin1.js"></script>
</head>
<body>
<?php

require 'Config.php';

$sql="SELECT Packages,Email FROM packages";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"<table border='2'><tr><th>PACKAGE TYPE</th><th>EMAIL</th><th>Edit</th><th>Delete</th></tr>";
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["Packages"]."</th><th>".$row["Email"]."</td><td><input type='button' name'Edit' value='update' id='packages' onclick=\"editpage('packages')\"></td><td><a href=WedDelete.php?delete=".$row['Email']." onclick=\"return confirm('Are you sure?')\"Delete</a></td></td></tr>";
    }
    echo"</table>";
}else{
    echo"0 results";
}

?>
</body>
</html>