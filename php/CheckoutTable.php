<?php

			session_start();
			//var_dump($_POST)
			$cart = $_SESSION['cart'];
			foreach ($cart as $val){
				if ($val['inCart'] == true){
					$sql = "sql statement";
				echo "<tr>";
				echo "<td> " . $val['name'] . " </td>";
				echo "<td> " . $val['id'] . " </td>";
				echo "<td> <button onclick=\"removeItemFromCart('" . $val['name'] . "')\">Remove</button> </td>";
				echo "</tr>";
				}
			}
			/*
			for($i = 5; $i < 10; $i++){
				$sql = "sql statement";
				echo "<tr>";
				echo "<td> Item Name </td>";
				echo "<td> $99 </td>";
				echo "<td> <button onclick=\"removeItemFromCart()\">Remove</button> </td>";
				echo "</tr>";
			}
			*/

?>
