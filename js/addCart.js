//<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

function msg(name){  
/*
	jQuery.ajax({
   	 	type: "POST",
    		url: 'your_functions_address.php',
    		dataType: 'json',
    		data: {funct,

    		success: function (obj, textstatus) {
                 	 if( !('error' in obj) ) {
                      		yourVariable = obj.result;
                  	}
                  	else {
                      		console.log(obj.error);
                  	}
            	}
});*/
	alert("before the ajaxcall");
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

/*
	$.post( "../Request.php", { name: "John", time: "2pm" }, {
		
			function(data,status){
				console.log("good call");

			}).fail(function(err,status){
				console.log("bad");

	} );
*/
	alert("after the ajax call");
}  


alert("Im just running here 8:44");

function cbf(){
	alert("checkBixFunction");

}
function display() {
  var x = document.getElementById("myCheck3").value;
  alert("The value of the checkbox is: " + x);
}
