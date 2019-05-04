function removeItemFromCart(name){  

	$.ajax({//simple ajax call
		 data: 'name=' + name,
 		url: '../php/updateCart.php',
    		method: 'POST',
    		success: function(msg) {
    		},
		error: function(xhr,status,error) {
			alert(status);
		}
	});
	
	location.reload();//reload the page
	
}
