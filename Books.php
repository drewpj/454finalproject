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
  		<a href="Home.html">Home</a>

  		<div class="dropdown">
    			<button class="dropbtn">Buy 
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="Tutors.html">Tutors</a>
      				<a class="active" href="Books.html">Books</a>
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
		<a href="cart.html">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>




<!--- side bar --->
	<div id="mySidebar" class="sidebar">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      			<a href="Tutors.html">Tutors</a>
      			<a href="Books.html">Books</a>
     			<a href="Materials.html">Study Materials</a>
    			<a href="Electronics.html">Electronics</a>
		</div>

		<div id="main">
  			<button class="openbtn" onclick="openNav()">☰ Buy A Different Product</button>  
		</div>




<!--- table --->
	<h2>Books Available</h2>

	<input type="text" id="myInput" onkeyup="tableFunction()" placeholder="Search for your subject to be tutored in.." title="Type in a name">

	<table id="myTable">
  		<tr class="header">
    			<th style="width:20%;">Service</th>
    			<th style="width:20%;">Price</th>
    			<th style="width:60%;">Brief Description</th>
  		</tr>
		<tr>
  			<td>How to pass 454</td>
    			<td>$0.01</td>
			<td>These will be inputted by our database</td>
  		</tr>
  		<tr>
    			<td>ComSci</td>
    			<td>Needs to be default money</td>
			<td>I hope this is okay to work with</td>

  		</tr>
  		<tr>
    			<td>Nat is awesome</td>
    			<td>priceless</td>
			<td>you're welcome</td>

  		</tr>
	</table>




            



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


		function tableFunction() {
  		    var input, filter, table, tr, td, i, txtValue;
  		    input = document.getElementById("myInput");
  		    filter = input.value.toUpperCase();
  		    table = document.getElementById("myTable");
  		    tr = table.getElementsByTagName("tr");
  		    	for (i = 0; i < tr.length; i++) {
  		    	    td = tr[i].getElementsByTagName("td")[0];
    			if (td) {
      			    txtValue = td.textContent || td.innerText;
      			if (txtValue.toUpperCase().indexOf(filter) > -1) {
        		    tr[i].style.display = "";
      			} else {
        		    tr[i].style.display = "none";
      			}
    		     	}       
  		    }
		}

		function openNav() {
  			document.getElementById("mySidebar").style.width = "250px";
  			document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
  			document.getElementById("mySidebar").style.width = "0";
  			document.getElementById("main").style.marginLeft= "0";
		}
	</script>

        </main>
      </body>
    </html>