<?php
	include_once 'include/db.php';
	var_dump($_POST);
	
	$name = $_POST['name'];
	$price = (int)$_POST['price'];
	$brief = $_POST['brief'];
	$product = $_POST['product'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$class = $_POST['class'];
	
	if ($price > 0 && !empty($title) && !empty($product) && !empty($name) && !empty($author) && !empty($brief)) {
			$id = uniqid();	
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."',
			'". $author ."');";
			//echo($sql);
			$result = sqlsrv_query($conn, $sql); 
			header("Location: /SellAgain.php");
	}
	else if ($price > 0 && !empty($title) && !empty($product) && !empty($name) && !empty($class) && !empty($brief)) {
			$id = uniqid();	
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author, Class) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."',
			'". $author ."', '". $class ."');";
			//echo($sql);
			$result = sqlsrv_query($conn, $sql); 
			header("Location: /SellAgain.php");
	}
	else if ($price > 0 && !empty($title) && !empty($product) && !empty($name) && !empty($brief)) {
			$id = uniqid();	
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."');";
			//echo($sql);
			$result = sqlsrv_query($conn, $sql); 
			header("Location: /SellAgain.php");
	}
	else {
		//$message = "Invalid input";
		header("Location: /SellFail.php");
		//echo("<script type='text/javascript'> alert('$message'); </script>");
	}
	
?>
