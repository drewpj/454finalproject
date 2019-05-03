<?php
	//necessary imports
	include_once '../include/db.php';
	session_start();
	$cart = $_SESSION['cart'];
	$sum = 0;
	foreach ($cart as $val){
		if ($val['inCart'] == true){
			
			$sum = $sum + $val['price'];

			$sql = "SELECT * from Item WHERE ID='" . $val['id'] . "'";

			$result = sqlsrv_query($conn, $sql);
		
			$row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

			$sellerID = $row["Seller"];

			$buyerID = $_SESSION['ID'];
			$time = time();
			$sql = "INSERT INTO Transactions (Items, Seller, Buyer, Time) VALUES ('".$val['name']."','".$sellerID."','".$buyerID."',".$time.")";
			echo $sql;
			//echo "\n\n" . $sql;
		
			$result = sqlsrv_query($conn, $sql); 
		}
	}
	
	unset($_SESSION['cart']);
	
	
	
	
?>