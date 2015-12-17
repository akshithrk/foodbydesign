<?php
	require_once('databaseConnection.php');
	$loginusername=$_POST['susername'];		
	$loginpassword=$_POST['spassword'];
	$loginemail=$_POST['email'];
	
	$error_message = "";
	/*
	if(($susername==null) or ($email==null) or ($spassword==null) or ($cpassword==null)){
		$error_message=$error_message."Required fields can not be empty. Fields with * are required fields.<br>";
	}
	if(strlen($email)>100){
		$error_message = $error_message."Email ID can not be longer than 100 character.<br>";
	}
	if((strlen($susername)<8) or (strlen($susername)>15)){
		$error_message = $error_message."Username has to be between 8 to 15 characters.<br>";
	}
	if((strlen($spassword)<8) or (strlen($spassword)>20)){
		$error_message = $error_message."Password has to be between 8 to 20 characters.<br>";
	}else if ($cpassword!=$spassword){
		$error_message = $error_message."Passwords do not match.<br>";
	}
	if($error_message!=null){
		include "SignUp.php";
		exit();
	}
	//Inserting the new user detail in database
	$query="select * from users where (user_id='".$susername."' or email_id='".$email."');";
	$stmt=$db->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch();
	if($result!=null){
		$error_message=$error_message."Username or email ID exists already.";
		include "SignUp.php";
		exit();
	}
	*/
	$newuserquery="insert into users values(null,'".$loginusername."','".$loginpassword."','".$loginemail."');";
	$affectedrows=$db->exec($newuserquery);
	$affectedrows=$db->exec("commit;");
	echo "signup successfully completed";
	exit();
		
?>