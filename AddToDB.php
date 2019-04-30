<?php
	include_once 'include/db.php';
	
	$sql = "INSERT INTO Item (Name, ID, Recurrence, Price, Description, Category, Seller ) VALUES ('CIS321', '" . uniqid() . "', '14', 10.21, 'OK tutoring services', 'Tutor', 'Sheila'),('A Great American Tour', '" . uniqid() . "', '0', 11.00, 'An OK book', 'Book', 'Guy Fieri');"
	$result = sqlsrv_query($conn, $sql);
	//$result = uniqid(); 
	
	echo "done";

?>
