<?php
	include_once '../include/db.php';
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	//SQL statement to be queried. 
	$sql = "SELECT Name, ID, Category FROM Users WHERE email='" . $email ."' AND Password='" . $password . "'"; 
	$result = sqlsrv_query($conn, $sql);

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
		header("Location: ../login.html?login=failure");
		echo " ";
	}
	

?>
