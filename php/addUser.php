<?php
	include_once '../include/db.php';
	session_start();
	$name = $_POST['firstName'];
	$familyname = $_POST['familyName'];
	$email = $_POST['email1'];
	$email2 = $_POST['email2'];
	$password = $_POST['password1'];
	$password2 = $_POST['password2'];

	if (empty($name) || empty($familyname) || empty($email) || empty($email2) || empty($password) || empty($password2)){
		echo "invalid input";
		header("Location: ../create-account.html?login=failure");
	}elseif ($email != $email2){
		echo "bad email";
		header("Location: ../create-account.html?login=failure");
		//do bad email stuff
	}elseif ($password != $password2){
		echo "bad password";
		header("Location: ../create-account.html?login=failure");
		//do bad password stuff
	} else {
	
		$id = uniqid();
		$sql = "INSERT INTO Users (Name, ID, Password, Wallet, Category, email) 
			VALUES ('". $name . " " . $familyName ."', '". $id ."', '". $password ."', 10.00, 'User', '".$email."');";
			
		$result = sqlsrv_query($conn, $sql); 
		header("Location: ../Home.php?login=success");
	}
?>
