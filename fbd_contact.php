<html>


	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contact_fbd</title>
		<meta name="keywords" content="restaurant company, free website template, CSS, HTML, fbd.com" />
		<meta name="description" content="restaurant company - free website template, HTML CSS layout" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<link href="fbd_style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="reflection.js"></script>
	</head>

	<body>
	   
		<div id="fbd_container">
		<div class="fbd_topmenu">
			  <ul>
				<li><a href="home.html">HOME</a></li>
				<li><a href="about.html">ABOUT US</a></li>
				<li><a href="shop.html">MENU</a></li>
				<li><a href="contact.html" class="current">CONTACT</a></li>
			  </ul>
		</div>
		<div id="fbd_topsection">FOOD BY DESIGN</div>
			<div id="fbd_headersection">
				<img src="images/fbd_header_photo.jpg" class="reflect rheight20 ropacity25" alt="fbd.com" width="806" height="166"  />
			
				<h2>Thank you for contacting us. We will be in touch with you very soon.</h2>
			</div>
		
			<?php
				require_once('databaseConnection.php');
				$first_name=$_POST['first_name'];		
				$last_name=$_POST['last_name'];
				$email=$_POST['email'];
				$telephone=$_POST['telephone'];
				$comments=$_POST['comments'];

				if(isset($_POST['email'])) {
					 
					$email_to = "krisgethin1@gmail.com";
					 
					$email_subject = "website contact_html form submissions";
					 
					 
					function died($error) {
						// error code message
						echo "We are very sorry, but there were error(s) found with the form you submitted. ";
						echo "These errors appear below.<br /><br />";
						echo $error."<br /><br />";
						echo "It would be great if you could go back and fix the above mentioned errors.<br /><br />";
						die();
					}
					 
					// validation expected data exists
					if(!isset($_POST['first_name']) ||
						!isset($_POST['last_name']) ||
						!isset($_POST['email']) ||
						!isset($_POST['telephone']) ||
						!isset($_POST['comments'])) {
						died('We are sorry, but there appears to be a problem with the form you submitted.');       
					}
					 
					$first_name = $_POST['first_name']; // required
					$last_name = $_POST['last_name']; // required
					$email_from = $_POST['email']; // required
					$telephone = $_POST['telephone']; // not required
					$comments = $_POST['comments']; // required
					 
					$error_message = "";
					$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
				  if(!preg_match($email_exp,$email_from)) {
					$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
				  }
					$string_exp = "/^[A-Za-z .'-]+$/";
				  if(!preg_match($string_exp,$first_name)) {
					$error_message .= 'The First Name you entered does not appear to be valid.<br />';
				  }
				  if(!preg_match($string_exp,$last_name)) {
					$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
				  }
				  if(strlen($comments) < 2) {
					$error_message .= 'Please contact us with a message.<br />';
				  }
				  if(strlen($error_message) > 0) {
					died($error_message);
				  }
					$email_message = "Form details below.\n\n";
					 
					function clean_string($string) {
					  $bad = array("content-type","bcc:","to:","cc:","href");
					  return str_replace($bad,"",$string);
					}
					 
					$email_message .= "First Name: ".clean_string($first_name)."\n";
					$email_message .= "Last Name: ".clean_string($last_name)."\n";
					$email_message .= "Email: ".clean_string($email_from)."\n";
					$email_message .= "Telephone: ".clean_string($telephone)."\n";
					$email_message .= "Comments: ".clean_string($comments)."\n";
				 
				 
					// create email headers
					$headers = 'From: '.$email_from."\r\n".
					'Reply-To: '.$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					@mail($email_to, $email_subject, $email_message, $headers);  

					$newuserquery="insert into comments values(null,'".$first_name."','".$last_name."','".$email."','".$telephone."','".$comments."');";
					$affectedrows=$db->exec($newuserquery);
					$affectedrows=$db->exec("commit;");
				
						exit();
				
					}
					die();
				?>
		</div>
	</body>
</html>