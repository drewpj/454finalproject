<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>GetSmart</title>
        <link rel="stylesheet" href="stylesheet.css">
	<script> src="header.js"</script>
	<script> src="tables.js" src="iCloud Drive/Documents/07 Senior Spring/CIS454 - SoftwareImplementation/Project2/tables.js"</script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      	<script type="text/javascript" src="js/checkout.js"></script> 
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
		<a href="Activity.php">Activity</a> 	
		<a class="active" href="Checkout.php">Cart</a>
		<a href="login.html">Log In</a>


    			</form>
  		</div>
	</div>




	<input type="text" id="myInput" onkeyup="tableFunction()" placeholder="Search for a recent activity" title="Type in the name of an activity">

	<table id="myTable">
		<tr class="header">
    			<th style="width:20%;">Name</th>
    			<th style="width:20%;">Price</th>
			<th style="width:20%;">Remove</th>
  		</tr>

		<?php
			include 'php/CheckoutTable.php';
		?>


	</table>
	    <?php
			echo "Your total is: $" . $_SESSION['total'];
		?>
		<div class="w-size25">
<!-- Button -->
			<?php		
				if (!isset($_SESSION['ID'])){
					echo "You are not signed in! Please sign in before buying an item.";
					echo "<a href=\"login.html\" >Click here to log in!</a>";
					return;
				} else {
					echo"<a href=\"Checkout.html\" class=\"flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4\">Checkout!</a>";	
				}
	
			?>
			
		</div>




            


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
