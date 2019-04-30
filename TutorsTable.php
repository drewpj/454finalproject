<?php
	include_once 'include/db.php';
	
	
	$sql = "SELECT * from Item WHERE category='Tutor'";
	
	$result = sqlsrv_query($conn, $sql);
	
	//echo "" . $result;
	
	//echo "\n11:37 have gotten this far";
	
	//while($row = $result->fetch_assoc()) {
	//while ($row = mysqli_fetch_assoc($result)){
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
		echo "<tr>";
		echo "<td>" . $row["Name"] . " </td>";
		echo "<td> " . $row["Price"] . " </td>";
		echo "<td> " . $row["Description"] . " </td>";
		
		echo "<td> <input type=\"checkbox\" id= \" " . $row["id"] . " \" onclick=\"msg('" . $row["Class"] . "')\" value=1> </td>";
		echo "</tr>";
	}
	//echo "\nend for loop";
	/*
	for($i = 0; $i < 5; $i++){
		$sql = "SELECT * from Tutors;";
		echo "<tr>";
		$id = "myCheck" . $i;
		echo "<td> FakeMajor" . $i . " </td>";
		echo "<td> $6.67 </td>";
		echo "<td> A very good description </td>";
		
		echo "<td> <input type=\"checkbox\" id= \" " . $id . " \" onclick=\"msg('FakeMajor" . $i . "')\" value=1> </td>";
		echo "</tr>";
	}
	*/

?>
