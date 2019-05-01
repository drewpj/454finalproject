<?php

	include_once 'include/db.php';
		
	$sql = "SELECT * from Item WHERE category='Study'";
	
	$result = sqlsrv_query($conn, $sql);

	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
		echo "<tr>";
		echo "<td>" . $row["Name"] . " </td>";
		echo "<td> " . $row["Price"] . " </td>";
		echo "<td> " . $row["Description"] . " </td>";
		
		echo "<td> <input type=\"checkbox\" id= \" " . $row["ID"] . " \" onclick=\"msg('" . $row["Name"] . "','". $row["ID"]."'," . $row["Price"] . ")\" value=1> </td>";
		echo "</tr>";
	}
?>