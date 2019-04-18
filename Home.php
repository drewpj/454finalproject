<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>GetSmart</title>
        <link rel="stylesheet" href="stylesheet.css">
      </head>





<!--- GetSmart header --->
      	<div class="header">
  		<h1>GetSmart</h1>
  		<p>Slogan Placeholder</p>
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
  		<a href="Activity.html">Activity</a>
  			<div class="search-container">
    			<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit">Submit</button>
    			</form>
  		</div>
	</div>




<!--- Home page content --->
	<div class="content">
  		<h3>Home Page Text</h3>
  		<p>Needs to be written.</p>
	</div>


  




<!---- About Us PopUp --->
	<div class="callout">
  		<div class="callout-header">About Us</div>
  			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  			<div class="callout-container">

<!--- What is in the PopUp --->
   			<p>About Us ... needs to be written :) </p>
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