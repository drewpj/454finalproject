<?php
	include_once 'include/db.php';
	
	$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller ) 
	VALUES (title, '" . uniqid() . "', '14', price, brief, product, name)";
	$result = sqlsrv_query($conn, $sql); 
	
	echo "done";
?>
