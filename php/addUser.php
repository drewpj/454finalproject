<?php
	include_once '../include/db.php';
	session_start();
	echo "addUser Running";
	$name = $_POST['firstName'];
	$familyname = $_POST['familyName'];
	$email = $_POST['email1'];
	$email2 = $_POST['email2'];
	$password = $_POST['password1'];
	$password2 = $_POST['password2'];
	$regex = "/.edu/"
	
	if(!preg_match($regex, $email))
		echo "bad email";
		
	if(!preg_match($regex, $email2))
		echo "bad email";

	if (empty($name) || empty($familyname) || empty($email) || empty($email2) || empty($password) || empty($password2))
		echo "invalid input";
	
	if ($email != $email2){
		echo "bad email";
		//do bad email stuff
	}

	if ($password != $password2){
		echo "bad password";
		//do bad password stuff
	}
	
	$id = uniqid();
	$sql = "INSERT INTO Users (Name, ID, Password, Wallet, Category, email) 
		VALUES ('". $name . " " . $familyName ."', '". $id ."', '". $password ."', 10.00, 'User', '".$email."');";
		
	$result = sqlsrv_query($conn, $sql); 
	echo "Add user ran";
?>
