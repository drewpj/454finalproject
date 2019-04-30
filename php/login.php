<?php
	include_once '../include/db.php';
	session_start();
	echo "\nLogin Running";

	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	//SQL statement to be queried.
	$sql = "SELECT Name, ID, Category FROM Users WHERE email='" . $email ."' AND PWDCOMPARE('" . $password . "', Password) = 1"; 
	
	$result = sqlsrv_query($conn, $sql);
	
		
	echo "\nemail = " . $email . " password = " . $password . "\n";
	echo "sql = " . $sql;
	if (sqlsrv_has_rows($result)) {
		echo("Logged in successfully!");
		//Get row results
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
		//Set user_type and user name variables.
		$category = $row['Category'];
		$_SESSION['userType'] = $category;
		$_SESSION['ID'] = $row['ID'];
		header("Location: ../Home.php?login=success");
	//Otherwise, say password or username error.
	} else {
		//Error message if wrong password.
		$message = "Bad Login info!";
		echo("<script type='text/javascript'> alert('$message'); </script>");
	}
	
	
	echo "\nLogin ran";
?>
