<?php
//include_once '../include/db.php';
session_start();

if ( ! isset($_SESSION['cart']) ) $_SESSION['cart'] = array();

$name = $_POST['name'];
print("name = " . $name);
print("id = " . $_POST['id']);

if (isset($_SESSION['cart'][$name])){
	if ($_SESSION['cart'][$name]['inCart'] == True){
		$_SESSION['cart'][$name]['inCart'] = False;
	} else {
		$_SESSION['cart'][$name]['inCart'] = True;
	}
} else {
	$_SESSION['cart'][$name] = array();
	$_SESSION['cart'][$name]['inCart'] = True;
	$_SESSION['cart'][$name]['name'] = $name;
	$_SESSION['cart'][$name]['id'] = $_POST['id'];
}


//echo "This is in request";
print_r($_POST);



echo "php/cart.php has successfully ran";


?>
