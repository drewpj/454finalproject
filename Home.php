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
  		<a class="active" href="Home.html">Home</a>
  		<div class="dropdown">
    			<button class="dropbtn">Buy 
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="Tutors.html">Tutors</a>
      				<a href="Books.html">Books</a>
     				<a href="Materials.html">Study Materials</a>
    				<a href="Electronics.html">Electronics</a>
    			</div>
  		</div> 
  		<a href="Sell.html">Sell</a> 
		<a href="cart.html">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>



	<div class="row">
	  <div class="column">
      	    <a href="Tutors.php">Tutors</a>
	    <img src="tutor.jpg" alt="Tutors" style="width:100%">
	  </div>

	  <div class="column">
      	    <a href="Tutors.php">Tutors</a>
	    <img src="book.jpg" alt="Books" style="width:100%">
	  </div>
	</div>

	<div class="row">
	  <div class="column">
     	    <a href="Materials.php">Study Materials</a>
	    <img src="materials.jpg" alt="Materials" style="width:100%">
	  </div>

	  <div class="column">
    	    <a href="Electronics.php">Electronics</a>
	    <img src="electronics.jpg" alt="Electronics" style="width:100%">
	  </div>
	</div>




<!---- About Us PopUp --->
	<div class="callout">
  		<div class="callout-header">About Us</div>
  			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  			<div class="callout-container">

<!--- What is in the PopUp --->
   			<p>The Next Big Thing.</p>
  		</div>
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
