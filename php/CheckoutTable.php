<?php

			session_start();
			
			for($i = 5; $i < 10; $i++){
				$sql = "sql statement";
				echo "<tr>";
				echo "<td> Item Name </td>";
				echo "<td> $99 </td>";
				echo "<td> <button onclick=\"removeItemFromCart()\">Remove</button> </td>";
				echo "</tr>";
			}

?>
