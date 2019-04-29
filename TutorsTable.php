<?php

			for($i = 0; $i < 5; $i++){
				$sql = "sql statement";
				echo "<tr>";
				$id = "myCheck" . $i;
				echo "<td> FakeMajor" . $i . " </td>";
				echo "<td> $6.67 </td>";
				echo "<td> A very good description </td>";
				
				echo "<td> <input type=\"checkbox\" id= \" " . $id . " \" onclick=\"msg(\\\"FakeMajor" . $i . "\\\")\" value=1> </td>";
				echo "</tr>";
			}

?>
