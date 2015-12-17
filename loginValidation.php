<?php
	
	
	require_once('databaseConnection.php');
	$loginusername=$_POST['loginusername'];		
	$loginpassword=$_POST['loginpassword'];
	$error_message = "";
	
	
	//Verifying login credential
	$query="select * from users where (username='".$loginusername."' and password='".$loginpassword."');";
	$stmt=$db->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch();
	if($result!=null){
		include 'home.html';
		exit();
		}
	else {
		$error_message=$error_message."Please enter a valid username and password.";
		echo $error_message;
		exit();
	}
	
?>
