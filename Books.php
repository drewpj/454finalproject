<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>GetSmart</title>
        <link rel="stylesheet" href="stylesheet.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/addCart.js"></script> 
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
      				<a class="active" href="Books.php">Books</a>
     				<a href="Materials.php">Study Materials</a>
    				<a href="Electronics.php">Electronics</a>
    			</div>

  		</div> 
  		<a href="Sell.php">Sell</a>
		<a href="Activity.php">Activity</a> 	
		<a href="Checkout.php">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>




<!--- side bar --->
	<div id="mySidebar" class="sidebar">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      			<a href="Tutors.php">Tutors</a>
      			<a href="Books.php">Books</a>
     			<a href="Materials.php">Study Materials</a>
    			<a href="Electronics.php">Electronics</a>
		</div>

		<div id="main">
  			<button class="openbtn" onclick="openNav()">☰ Buy A Different Product</button>  
		</div>




<!--- table --->
	<h2>Books Available</h2>

	<input type="text" id="myInput" onkeyup="tableFunction()" placeholder="Search for your subject to be tutored in.." title="Type in a name">

	<table id="myTable">
  		<tr class="header">
    			<th style="width:20%;">Name</th>
    			<th style="width:20%;">Author</th>
				<th style="width:20%;">Price</th>
    			<th style="width:40%;">Brief Description</th>
				<th style="width:10%;">Purchase?</th>
				
  		</tr>
		<?php
			include 'php/BooksTable.php';
		?>
	</table>
	
	<!--- Add to cart button --->
	<button class="open-button" onclick="openForm()">Add Selected Items To Shopping Cart</button>

	<div class="form-popup" id="myForm">
  	   <form action="/Checkout.php" class="form-container">
    		<h2>Next Step?</h2>

    		<button type="submit" class="btn">Continue To Shopping Cart</button>
    		<button type="button" class="btn cancel" onclick="closeForm()">Keep Shopping</button>
 	   </form>
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

		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
	</script>

        </main>
      </body>
    </html>