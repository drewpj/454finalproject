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
  		<a href="Home.html">Home</a>

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

  		<a class="active" href="Sell.html">Sell</a>
  		<a href="Activity.html">Activity</a>

		<a href="cart.html">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>




<h1> Invalid input </h1>


<!--- Input Form --->
		<h2>Sell Your Product or Service</h2>
		<p>Please enter the key information about what you are selling.</p>


		<div class="container">
		  <form class="login" action="/action_page.php" method="post">

		   <div class="row">
 		     <div class="col-25">
 		       <label for="product">Product</label>
		      </div>


		      <div class="col-75">
 		       <select id="product" name="product">
 		         <option value="any">Please Select An Option...</option>
 		         <option value="tutors">Tutors</option>
 		         <option value="books">Books</option>
 		         <option value="materials">Study Materials</option>
 		         <option value="electronics">Electronics</option>
 		       </select>
 		     </div>
 		   </div>


		    <div class="row">
		      <div class="col-25">
		        <label for="title">Title of Your Product</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="title" name="title" placeholder="Title of your product..">
		      </div>
		    </div>
 

		   <div class="row">
 		     <div class="col-25">
		        <label for="price">Price of Your Product</label>
		     </div>
 		     <div class="col-75">
 		       <input type="number" id="price" name="price" placeholder="Price of your product..">
 		     </div>
 		   </div>
 
		   <div class="row">
 		     <div class="col-25">
		        <label for="price">Your Name</label>
		     </div>
 		     <div class="col-75">
 		       <input type="text" id="name" name="name" placeholder="Insert name here...">
 		     </div>
 		   </div>
			  
		   <div class="row">
 		     <div class="col-25">
		        <label for="brief">Brief Description of Your Product</label>
 		     </div>


		      <div class="col-75">
 		       <textarea id="brief" name="brief" placeholder="Write a brief description to go on the initial product page.." style="height:100px"></textarea>
 		     </div>
		    </div>
 		 </form>
		</div>



		<h2>More Information Product or Service</h2>
		<p>Please enter any extra information you may have about your product or service. This will appear when a customer clicks on your offer.</p>

		<div class="container">
		  <form action="/action_page.php">
		     
		    <div class="row">
 		     <div class="col-25">
		        <label for="full">Number of products being sold</label>
 		     </div>
		      <div class="col-75">
 		       <input type="number" id="frequency" name="full" placeholder="Number selling...">
 		     </div>
		    </div>

		    <div class="row">
		      <div class="col-25">
		        <label for="location">Location</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="location" name="location" placeholder="Location..">
		      </div>
		    </div>
 

		   <div class="row">
 		     <div class="col-25">
		        <label for="full">Full Description of Your Product</label>
 		     </div>


		      <div class="col-75">
 		       <textarea id="full" name="full" placeholder="Write a more detailed description to go on your product's information page.." style="height:200px"></textarea>
 		     </div>
		    </div>


		    <div class="row">
		      <div class="col-25">
		        <label for="contact">Contact Information</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="contact" name="contact" placeholder="Please enter a way for the customer to contact you about your product or service..">
		      </div>
		    </div>


		    <div class="w-size25">
							
					<input type="submit" value="Submit!" class="">
		    </div>
 		 </form>
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