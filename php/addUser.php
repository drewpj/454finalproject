<?php
	include_once '../include/db.php';
	session_start();
	$name = $_POST['firstName'];
	$familyname = $_POST['familyName'];
	$email = $_POST['email1'];
	$email2 = $_POST['email2'];
	$password = $_POST['password1'];
	$password2 = $_POST['password2'];
	echo ". ";
	if (empty($name) || empty($familyname) || empty($email) || empty($email2) || empty($password) || empty($password2)){
		echo("<script type='text/javascript'> alert('Please fill out all forms!'); </script>");
		sleep(3);
		header("Location: ../create-account.html?login=failure");
	}elseif ($email != $email2){
		echo("<script type='text/javascript'> alert('Your inputted emails don't match!'); </script>");
		sleep(3);
		header("Location: ../create-account.html?login=failure");
		//do bad email stuff
	}elseif ($password != $password2){
		echo("<script type='text/javascript'> alert('Your inputted passwords don't match!'); </script>");
		sleep(3);
		header("Location: ../create-account.html?login=failure");
		//do bad password stuff
	} else {
	
		$id = uniqid();
		$sql = "INSERT INTO Users (Name, ID, Password, Wallet, Category, email) 
			VALUES ('". $name . " " . $familyName ."', '". $id ."', '". $password ."', 10.00, 'User', '".$email."');";
			
		$result = sqlsrv_query($conn, $sql); 
		header("Location: ../login.html?login=success");
	}
	echo " ";
?>
