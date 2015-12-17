<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="Author" content="AK">
		<meta name="Description" content="Home">
		<link href="fbd_style.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<title>Login</title>
		
		
	</head>
	<body class="login">
	    <div id="fbd_container">

       <div class="fbd_topmenu">
          <ul>
            <li><a href="index.html" class="current">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="shop.html">MENU</a></li>
            <li><a href="contact.html">CONTACT</a></li>
			<li><a href = "logout.php">Log out</a></li>
          </ul>
		  
       </div>

       <div id="fbd_topsection">FOOD BY DESIGN</div>
   
       <div id="fbd_headersection">
	      <img src="images/fbd_header_photo.jpg" class="reflect rheight20 ropacity25" alt="fbd.com" width="806" height="166"  />
	      </div>

       <div id="fbd_content_section">
		
		<h1 class="login">Please login here:</h1>
		<form class="login" method="post" action="loginValidation.php">		
			<input type="hidden" name="pageName" value="login">
			<?php
				if(!empty($error_message)){
					echo $error_message."<br><br>";
				}
			?>
			Username: <input type="text" name="loginusername"><br><br>
			Password: <input type="password" name="loginpassword"><br><br>			
			<input type="submit" value="Login">
			<input type="reset" value="Reset"><br>
			<a href="SignUp.php">Not a member? Register here</a>
		</form>
		</div>
	
       <div id="fbd_footer">Designed by <a href="http://www.fbd.com" target="_parent"><strong>ARK</strong></a> <span class="fbd_footer">|&nbsp;<u> Inspired by <a href="http://www.bodybuilding.com/fun/krisgethin.htm">Kris Gethin</a></u></span></div>
    </div>
	</body>
</html>