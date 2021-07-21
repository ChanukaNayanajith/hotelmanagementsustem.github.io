<!DOCTYPE html>
<html>

<head>
    <title>KINGS HOTEL</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Home.css">
    <link rel="stylesheet" type="text/css" href="Styles/searchnavigation.css">
    <link rel="stylesheet" type="text/css" href="Styles/footer.css">
    <link rel="stylesheet" type="text/css" href="Styles/slider.css">
    <link rel="stylesheet" type="text/css" href="Styles/Registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/slider.js">
    </script>
    <script src="js/Registration.js">
    </script>
    <script src="js/Admin.js">
    </script>
    <scripy src="js/WedAdmin.js">
    </scripy>
    <script src="js/Admin1.js"></script>


</head>

<body>

    <div class="bg-img">
        <div class="warpper">
            <div class="top-bar clearfix">
                <div class="header" style="background-image: url(" Photo/image1.jpg ");">
                    <img style="float:left;margin-left:100px;" src="Photo/logo.png" width="200" high="200">
                    <center>
                        <h1>
                            <font color="white"> KINGS HOTEL </font>
                        </h1>
                    </center>

                    <button class="login" type="submit"><i class="fa fa-user fa-3x"></i><br><b><a href="../html/Sign up.html">Sign Up/Login</a></b></button>

                </div>
            </div>

        </div>
    </div>



    <div class="topnav">
        <a href="../html/Home.html">HOME</a></li>
        <a href="../html/wedding.html">WEDDING</a></li>
        <a href="../html/dinning.html">DINING</a></li>
        <a href="../html/Accommodation111.html">ACCOMMODATION</a></li>
        <a href="../html/Events.html">EVENTS</a></li>
        <a href="../html/Offers11.html">OFFERS</a>
        <a href="../html/facilities.html">FACILITIES</a>
        <a href="../html/EXPERIENCE.html">EXPERIENCE</a>
        <a href="#LOCATION">LOCATION</a>
        <a href="../html/SPA.html">SPA</a>
        <a href="../html/contactus.html">CONTACT US</a>
        <a href="../html/aboutus.html">ABOUT US</a>
        <a href="../html/USER ACCOUNT.html">MY ACCOUNTS</a>
        <a href="../html/Registration1.html">REGISTER</a>
        <a href="#BOOK NOW">BOOK NOW</a>
        <a href="../php/PHPAdmin.php">ADMIN</a>
    </div>
    
    <form action="WedUpdate.php" method="POST">
        Package Type:<br/>
        <input type="text" name="packagetype" placeholder="Package Type" required> <br/><br/> E-mail:
        <br/>
        <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
        <center><input type="submit" id="submitBtn" value="Submit" style="width:100px; height:30px;"></center>
    </form>

    <h1 class="line"></h1>
    <footer class="footer">
        <!-- Add font Social Media icons -->
        <a href="https://www.facebook.com" class="fa fa-facebook"></a>
        <a href="https://www.googleplus.com" class="fa fa-google"></a>
        <a href="https://www.youtube.com" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram"></a>

        <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
        </div>
        <div class="bottomttex ">
            <p>
                <h2><br> KINGS HOTEL</h2><br>
                <h>+94912233456<br> George's Road<br> Colombo 7 </h3>
            </p>
        </div>
    </footer>



</body>

</html>