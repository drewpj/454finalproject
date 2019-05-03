<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>GetSmart</title>
        <link rel="stylesheet" href="stylesheet.css">
      </head>





<!--- GetSmart header --->
      	<div class="header">
  		<img src="logo.png" alt="Logo" class="center">
  		<p>College Hacks to Get Smarter</p>
	</div>



<!--- navbar --->
	<div class="topnav">
  		<a class="active" href="Home.php">Home</a>
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
		<a href="cart.php">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>



<!-- login part -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
				<div class="col-md-6 p-b-30">
					<form class="leave-comment">

						<h4 class="m-text4 p-b-20 p-t-5">
							Congratulations! 
						</h4>

						<h4 class="m-text10 p-b-20 p-t-1">
							Your order has been placed!
						</h4>

						<h4 class="m-text10 p-b-20 p-t-1">
							We hope to see you again soon!
						</h4>

						<h4 class="m-text10 p-b-20 p-t-1">
							Thank you for using Group 17's website :)
						</h4>


	</section>


            <?php
				include 'php/submitPayment.php';
			?>





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
</body>
</html>
