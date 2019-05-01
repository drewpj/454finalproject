//<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

function msg(namex,idx,pricex){  

	alert("before the ajaxcall 8:56");
	$.ajax({
		 //data: 'name=' + name, 'id=' + id,
		 data: { name: namex, id: idx, price: pricex},//'name=' + name, 'id=' + id,
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


	alert("after the ajax call");
}  


//alert("Im just running here 8:56");

function cbf(){
	alert("checkBixFunction");

}
function display() {
  var x = document.getElementById("myCheck3").value;
  alert("The value of the checkbox is: " + x);
}
