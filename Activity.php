<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>GetSmart</title>
        <link rel="stylesheet" href="stylesheet.css">
	<script> src="header.js"</script>
	<script> src="tables.js" src="iCloud Drive/Documents/07 Senior Spring/CIS454 - SoftwareImplementation/Project2/tables.js"</script>
      </head>




<!--- GetSmart header --->
      	<div class="header">
  		<img src="logo.png" alt="Logo" class="center">
  		<p>College Hacks to Get Smarter</p>
	</div>



<!--- navbar --->
	<div class="topnav">
  		<a href="Home.php">Home</a>
  		
		<div class="dropdown">
    			<button class="dropbtn">Buy 
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="Tutors.php">Tutors</a>
      				<a href="Books.php">Books</a>
     				<a href="Materials.php">Study Materials</a>
    				<a href="Electronics.php">Electronics</a>
    			</div>
  		</div> 
  		
		<a href="Sell.php">Sell</a>  
		<a class="active" href="Activity.php">Activity</a> 			
		<a href="cart.php">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>




	<input type="text" id="myInput" onkeyup="tableFunction()" placeholder="Search for a recent activity" title="Type in the name of an activity">

	<table id="myTable">
		<tr class="header">
    			<th style="width:20%;">From</th>
    			<th style="width:20%;">To</th>
			<th style="width:20%;">Time</th>
    			<th style="width:60%;">Description</th>
  		</tr>

		<?php
			include_once 'include/db.php';
		
			$sql = "SELECT * from Transactions";
	
			$result = sqlsrv_query($conn, $sql);
			
			while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
				echo "<tr>";
				
				//Buyer
				$buyerID = $row['Buyer'];
				$sql = "SELECT * from Users WHERE ID='" . $buyerID . "'";
				$resultBuyer = sqlsrv_query($conn, $sql);
				$rowBuyer = sqlsrv_fetch_array( $resultBuyer, SQLSRV_FETCH_ASSOC);
				$buyerName = $rowBuyer["Name"];
				
				//Seller
				$sellerID = $row['Seller'];
				$sql = "SELECT * from Users WHERE ID='" . $sellerID . "'";
				$resultSeller = sqlsrv_query($conn, $sql);
				$rowSeller = sqlsrv_fetch_array( $resultSeller, SQLSRV_FETCH_ASSOC);
				$sellerName = $rowSeller["Name"];
				echo $sql;
				
				
				echo "<td>" . $sellerName . " </td>";
				echo "<td> " . $buyerName . " </td>";
				echo "<td> " . date('r', $row["Time"]) . " </td>";
				echo "<td> " . $row["Items"] . " </td>";
				
				echo "</tr>";
			}
		?>


	</table>




            
<div class="footer">
  <p>Copyright© Group 17</p>
</div>


	<script>
		window.onscroll = function() {headerFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function headerFunction() {
  		   if (window.pageYOffset >= sticky) {
    		      navbar.classList.add("sticky")
  		   } else {
    		      navbar.classList.remove("sticky");
  		   }
		}
	</script>


        </main>
      </body>
    </html>
