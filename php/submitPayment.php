<?php
	//necessary imports
	include_once '../include/db.php';
	session_start();
	$cart = $_SESSION['cart'];
	$sum = 0;
	foreach ($cart as $val){
		if ($val['inCart'] == true){
			
			$sum = $sum + $val['price'];
			//get ID from itemID
			$sql = "SELECT * from Item WHERE ID='" . $val['id'] . "'";
			//echo $sql;
			$result = sqlsrv_query($conn, $sql);
			//echo "   result=" . $result . "    ";			
			$row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
			//echo "   row=" . $row . "    ";
			$sellerID = $row["Seller"];
			//echo "SellerID=" . $sellerID . "  ID=" . $val['id'] . "     ";
			$buyerID = $_SESSION['ID'];
			$time = time();
			$sql = "INSERT INTO Transactions (Items, Seller, Buyer, Time) VALUES ('".$val['name']."','".$sellerID."','".$buyerID."',".$time.")";
			//echo "\n\n" . $sql;
		
			$result = sqlsrv_query($conn, $sql); 
		}
	}
	echo "Congrats! Your payment was successful! Your total is: " . $sum;
	
	<a href="Home.php" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
				Press me to go home!
			</a>
	
	
?>