<?php
	include_once 'include/db.php';
	
	$name = $_POST['name'];
	$freq = $_POST['frequency'];
	$price = $_POST['price'];
	$brief = $_POST['brief'];
	$product = $_POST['product'];
	$title = $_POST['title'];
	$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller ) 
	VALUES ($title, '" . uniqid() . "', '$freq, $price, $brief, $product, $name)";
	$result = sqlsrv_query($conn, $sql); 
	header( "refresh:5;" );
	
	echo "done";
?>
