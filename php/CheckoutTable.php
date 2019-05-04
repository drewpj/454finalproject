<?php
			session_start();
			$cart = $_SESSION['cart'];
			$sum = 0;
			
			foreach ($cart as $val){//prints everything in the cart
				if ($val['inCart'] == true){
					$sql = "sql statement";
					$sum = $sum + $val['price'];
					echo "<tr>";
					echo "<td> " . $val['name'] . " </td>";
					echo "<td> " . $val['price'] . " </td>";
					echo "<td> <button onclick=\"removeItemFromCart('" . $val['name'] . "')\">Remove</button> </td>";
					echo "</tr>";
					}
			}
			$_SESSION['total'] = $sum;
?>
