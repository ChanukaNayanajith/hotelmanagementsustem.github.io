<!DOCTYPE html>
<html>
	<head>
		<title>KINGS HOTEL | About Us</title>
			<link rel="stylesheet" type="text/css"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css"  href="Styles/Home.css">
			<link rel="stylesheet" type="text/css"  href="Styles/searchnavigation.css">
			<link rel="stylesheet" type="text/css"  href="Styles/footer.css">
			<link rel="stylesheet" type="text/css" href="Styles/aboutus.css">
			<link rel="stylesheet" type="text/css" href="Styles/slideimage.css">
			<script src="js/slideimage.js"></script>
			<script src="js/admin2.js"></script>
			<script src="js/Admin1.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
<body>
	<style>
	body{
		font-family: 'oswald';
		background: linear-gradient(#8f94a7 , transparent),url(Photo/marry.jpg);
		background-size: cover;
		background-position:center;
		background-repeat: no-repeat;
		height: auto;
		}
	</style>

	<div class = "bg-img">
		<div class = "warpper">
			<div class = "top-bar clearfix">
				<div class="header" style="background-image: url("Photo/img.jpg");">
					<img style = "float:left; width: 200px; height:200px;margin-left:100px;" src = "Photo/logo.png" width="200" high="200">
					<center>
						<h1> <font color="white"> KINGS HOTEL </font></h1>
					</center>
					<button class="login" type="submit"><i class="fa fa-user fa-3x"></i><br><b><a href="html/Sign up.html">Sign Up/Login</a></b></button>
	
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

	<br><br>
	<div class="about-section">
		<center>
			<h1> <font color="#DEB887">ABOUT US </font></h1>
			<br><br>
		
				<p class="p2"><h1><i>No matter the time of year, here KINGS we offer gorgeous<br> scenary and unique place 
					to begin your new<br>lives together.<br>
					 With a dedicated wedding planner at your side, we'll help you to <br>select the
					perfect venue,<br>decor, menu, activities & entertainment.</i></h1>
					<br><br>
				<h2><i> Our wedding packages accomodate up to 300 people, <br>with room blocks,menus, and reception packages 
					to fit <br>
					your particular style and subject. <br>We are excited to help you plan a memorable day among your family
					friends.</i></h2></p>
			
		</center>
	</div>
	<br><br>
<center>
<td style="padding:200" >
        <script>
            var myIndex = 0;
            carousel(myIndex);
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              if (typeof x[myIndex-1] !== 'undefined') {   
              x[myIndex-1].style.display = "block";  
              }
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
		</script>
          
          <div style="width: 100%">
            <img class = "mySlides" src="Photo/dining.jpg"  style="max-width:100px;min-width: 650px;height: 530px;">
            <img class = "mySlides" src="Photo/jar.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
            <img class = "mySlides" src="Photo/drinks.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
            <img class = "mySlides" src="Photo/cards.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/food.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/din.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/cake.png" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/bb.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/man.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/di.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/exclusive.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/mm.png" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/wedding.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/deco.jpg" style="max-width:100px;min-width: 650px;height: 530px;">
			<img class = "mySlides" src="Photo/wine.jpg" style="max-width:100px;min-width: 650px;height: 530px;">

		 </div>
          
          
    </td>
</center>
	<br><br>
		<center>
			<h2><font color="red"> YOU BRING THE INSPIRATION - WE'LL DO EVERYTHING ELSE </font></h2><br><br>
				<p class="p1"><font color="white"> <h2>For an event so magical that you can taste it, look no further than the fantastic food and beverage <br><br>
									team at KINGS HOTEL.<br><br>
									Whether crafting a deliciously delightful menu for your reception in our ballroom, delivering late-night snacks to <br><br>
									overnight guests, or putting out a royal spread for wedding attendees, the Mountain View's chefs strive to impress! </h2></font>> </p>
		</center>
	<br><br><br>

	<div class="container">
		<form action="aboutus_update.php" method="POST" name="aboutus">
			<p>More about KINGS </p> <br><br>

				<div class="msg">
					<label>Message</label>
					<textarea  name="text" placeholder="Leave a message" style="height:300px" class="area"></textarea>
				</div>

				
				<div class="login">
					<label>Email</label>
						<input type ="text" name="email" placeholder="Your Email" class="input">
				</div>
			
				
				<div class="submit">
					<center><input type="submit" id="submitBtn" value="Submit"></center>
				</div>
		</form>
	</div>
	
	<footer class="footer" >
		<!-- Add font Social Media icons -->
				<a href="www.facebook.com" class="fa fa-facebook"></a>
				<a href="www.googleplus.com" class="fa fa-google"></a>
				<a href="www.youtube.com" class="fa fa-youtube"></a>
				<a href="www.instagram.com" class="fa fa-instagram"></a>
				
				<div class="icon-container">
					  <i class="fa fa-cc-visa" style="color:navy;"></i>
					  <i class="fa fa-cc-amex" style="color:blue;"></i>
					  <i class="fa fa-cc-mastercard" style="color:red;"></i>
					  <i class="fa fa-cc-discover" style="color:orange;"></i>
					</div>
					
				<center>
					<div class="text">
						<p><h2><br>KINGS HOTEL</h2><br>	   
							   <h3>+94912233456<br>
								   George's Road<br></h3>
					</div>		   Colombo 7 </p>
				</center>
				
		</footer>
		 
	 </footer>
	</body>
</html>

