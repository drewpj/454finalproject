//<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

function msg(){  
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
/*	jQuery.ajax({
		 data: 'name=' + "myname",
 		url: '../Request.php',
    		method: 'POST', // or GET
    		success: function("hello") {
       			alert("alert in the ajax");
    		}
	});
*/
	alert("alert2");
}  


alert("Im just running here");

function cbf(){
	alert("checkBixFunction");

}
function display() {
  var x = document.getElementById("myCheck3").value;
  alert("The value of the checkbox is: " + x);
}
