<?php
	//necessary imports
	include_once '../include/db.php';
	session_start();
	$cart = $_SESSION['cart'];
	//$sum = 0;
	foreach ($cart as $val){
		if ($val['inCart'] == true){
			
			//$sum = $sum + $val['price'];

			$sql1 = "SELECT * from Item WHERE ID='" . $val['id'] . "';";
			echo $sql1;
			$result = sqlsrv_query($conn, $sql1);
		
			$row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
			echo "    |      row:".$row."          |    ";
			$sellerID = $row["Seller"];
			echo "    |      seller:".$sellerID."          |    ";
			$buyerID = $_SESSION['ID'];
			$time = time();
			$sql2 = "INSERT INTO Transactions (Items, Seller, Buyer, Time) VALUES ('".$val['name']."','".$sellerID."','".$buyerID."',".$time.");";
			echo $sql2;
			//echo "\n\n" . $sql;
		
			$result = sqlsrv_query($conn, $sql2); 
		}
	}
	
	unset($_SESSION['cart']);
	
	
	
	
?>