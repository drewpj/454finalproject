<?php
	include_once 'include/db.php';
	
	$name = $_POST['name'];
	$freq = $_POST['frequency'];
	$price = $_POST['price'];
	$brief = $_POST['brief'];
	$product = $_POST['product'];
	$title = $_POST['title'];
	
	if (!empty($name)) {
		$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller ) 
		VALUES ($title, '" . uniqid() . "', '$freq, $price, $brief, $product, $name)";
		$result = sqlsrv_query($conn, $sql);
		header("Location: /SellAgain.php");
	}
	else {
		//$message = "Invalid input";
		header("Location: /SellFail.php");
		//echo("<script type='text/javascript'> alert('$message'); </script>");
	}
	
?>
