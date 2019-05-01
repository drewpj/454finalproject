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

  		<a class="active" href="Sell.php">Sell</a>
		<a href="Activity.php">Activity</a> 	
		<a href="cart.php">Cart</a>
		<a href="login.html">Log In</a>
    			</form>
  		</div>
	</div>







<!--- Input Form --->
		<h2>Sell Your Product or Service</h2>
		<p>Please enter the key information about what you are selling.</p>


		<div class="container">
		  <form action="/action_page.php" method="post">

		   <div class="row">
 		     <div class="col-25">
 		       <label for="product">Product</label>
		      </div>


		      <div class="col-75">
 		       <select id="product" name="product">
 		         <option value="Any">Please Select An Option...</option>
 		         <option value="Tutors">Tutors</option>
 		         <option value="Books">Books</option>
 		         <option value="Materials">Study Materials</option>
 		         <option value="Electronics">Electronics</option>
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
		        <label for="name">Your Name</label>
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

		    <div class="row">
		      <div class="col-25">
		        <label for="author">Author</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="author" name="author" placeholder="Author..">
		      </div>
		    </div>


		    <div class="row">
		      <div class="col-25">
		        <label for="class">Class</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="class" name="class" placeholder="Class you are tutoring...">
		      </div>
		    </div>


		    <div class="w-size25">
							
					<input type="submit" value="Submit!" class="">
		    </div>
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
		
	</script>


        </main>
      </body>
    </html>
