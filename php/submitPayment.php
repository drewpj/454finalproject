<?php
	include_once '../include/db.php';
	session_start();
	$cart = $_SESSION['cart'];
	foreach ($cart as $val){
		if ($val['inCart'] == true){
			//Creating the Transaction sql statement for the Transaction table
			$sellerID = $val['seller'];
			$buyerID = $_SESSION['ID'];
			$time = time();
			$sql2 = "INSERT INTO Transactions (Items, Seller, Buyer, Time) VALUES ('".$val['name']."','".$sellerID."','".$buyerID."',".$time.")";
			$result = sqlsrv_query($conn, $sql2); 
			
			//Updates the quantity
			$sql = "UPDATE Item SET Quantity = Quantity - 1 WHERE id = '" . $val['id'] . "'";
			$result = sqlsrv_query($conn, $sql);
		}
	}
	unset($_SESSION['cart']);
	header("Location: ../Congrats.html");
?>