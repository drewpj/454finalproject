function removeItemFromCart(name){  

	alert("removeItemFromCart");
	$.ajax({
		 data: 'name=' + name,
 		url: '../php/updateCart.php',
    		method: 'POST', // or GET
    		success: function(msg) {
       			alert(msg);
			alert("success");
    		},
		error: function(xhr,status,error) {
			alert(status);
			alert("error");
		}
	});
	
	location.reload();
	/*
	$.ajax({
		 data: 'name=' + "myname",
 		url: '../php/updateCart.php',
    		method: 'POST', // or GET
    		success: function(msg) {
       			alert(msg);
			alert("success");
    		},
		error: function(xhr,status,error) {
			alert(status);
			alert("error");
		}
	});
	*/
}
