function msg(namex,idx,pricex,sellerx){  

	$.ajax({
		 data: { name: namex, id: idx, price: pricex, seller: sellerx},//Pass the data through
 		url: '../php/updateCart.php',
    		method: 'POST', // or GET
    		success: function(msg) {

    		},
		error: function(xhr,status,error) {
			alert(status);
		}
	});

}  

