<?php
//include_once '../include/db.php';
session_start();

if ( ! isset($_SESSION['cart']) ) $_SESSION['cart'] = array();

$name = $_POST['name'];
print("name = " . $name);

if (isset($_SESSION['cart'][$name])){
	if ($_SESSION['cart'][$name] == True){
		$_SESSION['cart'][$name] = False;
	} else {
		$_SESSION['cart'][$name] = True;
	}
} else {
	$_SESSION['cart'][$name] = True;
}


//echo "This is in request";
print_r($_POST);



echo "php/cart.php has successfully ran";


?>
