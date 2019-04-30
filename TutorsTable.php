<?php
	include_once 'include/db.php';
	$sql = "SELECT * from Tutors";
	$result = $conn->query($sql);
	echo "". $result;
	echo "have gotten this far";
	/*
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td> FakeMajor" . $row["Class"] . " </td>";
		echo "<td> " . $row["Price"] . " </td>";
		echo "<td> " . $row["Description"] . " </td>";
		
		echo "<td> <input type=\"checkbox\" id= \" " . $id . " \" onclick=\"msg('" . $row["Class"] . "')\" value=1> </td>";
		echo "</tr>";
	}
	*/
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
