<?php
	include_once 'include/db.php';
	//var_dump($_POST);
	session_start();
	if (!isset($_SESSION['ID'])){
		echo "You are not signed in! Please sign in before selling an item.";
		echo "<a href=\"login.html\" >Click here to log in!</a>";
		return;
	}
	
	$name = $_POST['name'];
	$price = (int)$_POST['price'];
	$brief = $_POST['brief'];
	$product = $_POST['product'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$class = $_POST['class'];
	
	$id = uniqid();	
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author, Class) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."',
			'". $author ."', '". $class ."');";
			echo($sql);
			$result = sqlsrv_query($conn, $sql);
	
	/*
	if ($price > 0 && !empty($title) && !empty($product) && !empty($name) && !empty($author) && !empty($brief)) {
			$id = uniqid();	
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author, Class) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."',
			'". $author ."', '". $class ."');";
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
			$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller, Author, Class) 
			VALUES ('". $title . "', '". $id ."', 0, ".$price.", '". $brief ."', '". $product ."', '". $name ."',
			'". $author ."', '". $class ."');";
			//echo($sql);
			$result = sqlsrv_query($conn, $sql); 
			header("Location: /SellAgain.php");
	}
	else {
		//$message = "Invalid input";
		header("Location: /SellFail.php");
		//echo("<script type='text/javascript'> alert('$message'); </script>");
	}
	*/
?>
