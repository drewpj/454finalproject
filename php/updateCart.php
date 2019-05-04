<?php
session_start();

if ( ! isset($_SESSION['cart']) ) $_SESSION['cart'] = array();

$name = $_POST['name'];

if (isset($_SESSION['cart'][$name])){//if the item already exists in the cart
	if ($_SESSION['cart'][$name]['inCart'] == True){//flip it's 'inCart' variable
		$_SESSION['cart'][$name]['inCart'] = False;
	} else {
		$_SESSION['cart'][$name]['inCart'] = True;
	}
} else {//create the variable 
	$_SESSION['cart'][$name] = array();
	$_SESSION['cart'][$name]['inCart'] = True;
	$_SESSION['cart'][$name]['name'] = $name;
	$_SESSION['cart'][$name]['id'] = $_POST['id'];
	$_SESSION['cart'][$name]['price'] = $_POST['price'];
	$_SESSION['cart'][$name]['seller'] = $_POST['seller'];
}

?>
