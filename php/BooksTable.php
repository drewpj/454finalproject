<?php

	include_once 'include/db.php';
	//Queries the items DB for Books which have stock left	
	$sql = "SELECT * from Item WHERE category='Book' AND Quantity > 0";
	$result = sqlsrv_query($conn, $sql);

	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {//prints each qualified book
		echo "<tr>";
		echo "<td>" . $row["Name"] . " </td>";
		echo "<td> " . $row["Author"] . " </td>";
		echo "<td> " . $row["Price"] . " </td>";
		echo "<td> " . $row["Description"] . " </td>";
		echo "<td> <input type=\"checkbox\" id= \" " . $row["id"] . " \" onclick=\"msg('" . $row["Name"] . "','". $row["ID"]."','".$row["Price"]."','".$row["Seller"]."')\" value=1> </td>";
		echo "</tr>";
	}
?>