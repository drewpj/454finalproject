<?php
//include_once '../include/db.php';
session_start();

$name = $_POST['name'];
print("name = " . $name);

if (isset($_SESSION[$name])){
	if ($_SESSION[$name] == True){
		$_SESSION[$name] = False;
	} else {
		$_SESSION[$name] = True;
	}
} else {
	$_SESSION[$name] = True;
}


//echo "This is in request";
print_r($_POST);



echo "php/cart.php has successfully ran";


?>
