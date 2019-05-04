<?php
	include_once '../include/db.php';
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT Name, ID, Category FROM Users WHERE email='" . $email ."' AND Password='" . $password . "'"; 
	$result = sqlsrv_query($conn, $sql);
	
	echo ". ";
	if (sqlsrv_has_rows($result)) 
	{
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
		$category = $row['Category'];
		$_SESSION['userType'] = $category;//set user category and ID
		$_SESSION['ID'] = $row['ID'];
		header("Location: ../Home.php?login=success");
	} 
	else 
	{
		echo("<script type='text/javascript'> alert('" . "Bad Login info!" . "'); </script>");
		header("Location: ../login.html?login=failure");
		echo " ";
	}
	

?>
