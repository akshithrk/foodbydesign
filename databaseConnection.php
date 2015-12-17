<?php
	$dbaname="foodbydesign";
	$username="root";
	$password="";
	try {
		$db=new PDO("mysql:host=localhost;dbname=$dbaname",$username,$password);
	}
	catch(PDOException $error){
		echo $error;
	}
?>