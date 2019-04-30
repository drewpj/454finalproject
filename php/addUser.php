<?php
	include_once '../include/db.php';
	session_start();
	
	$name = $_POST['firstName'];
	$familyname = $_POST['familyName'];
	$email = $_POST['email1'];
	$email2 = $_POST['email2'];
	$password = $_POST['password1'];
	$password2 = $_POST['password2'];
	
	
	if ($email != $email2){
		echo "bad email";
		//do bad email stuff
	}

	if ($password != $password2){
		echo "bad password";
		//do bad password stuff
	}
	
	$id = uniqid();
	$sql = "INSERT INTO Users (Name, ID, Password, Wallet, Category) 
		VALUES ('". $name . " " . $familyName ."', '". $id ."', '". $password ."', 10.00, 'User');";
		
	$result = sqlsrv_query($conn, $sql); 
?>
