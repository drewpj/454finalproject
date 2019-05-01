<?php
	include_once '...include/db.php';
	//var_dump($_POST);
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$brief = $_POST['brief'];
	$product = $_POST['product'];
	$title = $_POST['title'];
	$author = $_POST['location'];
	
	if ($price > 0 && !empty($title)) {
		$id = uniqid();	
		$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author) 
		VALUES ('". $title . "', '". $id ."', 0, $price, '". $brief ."', '". $product ."', '". $name ."', '". $author ."');";
		echo($sql);
		$result = sqlsrv_query($conn, $sql); 
		//header("Location: /SellAgain.php");
	}
	else {
		//$message = "Invalid input";
		header("Location: /SellFail.php");
		//echo("<script type='text/javascript'> alert('$message'); </script>");
	}
	
?>
