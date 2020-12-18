<?php
// NOTE THAT THE USER ID IS STATIC AND MUST BE CHAGNED!
include 'config.php';
session_start();
// item to find
$name = $_GET['data'];
$email = $_SESSION['email'];
$email = stripslashes($email);
$email = mysqli_real_escape_string($con, $email);
// Variable initializations
$tempCart = $tempQuantity = $cart = $quantity = [];
$newCart = $prodId = $newQuantity = '';
//just change the user id to the session's email
$cart = findArray("SELECT cart FROM `registered_accounts` WHERE email = '$email'", "cart");
$quantity = findArray("SELECT quantity FROM `registered_accounts` WHERE email = '$email'", "quantity");
$prodId = findData("SELECT product_id FROM products WHERE name='" . $name . "'", "product_id");
if (in_array($prodId, $cart)) {
	foreach ($cart as $key => $value) {
		if ($value == $prodId) {
			if (isset($_GET['quantity'])) {
				$quantity[$key] += $_GET['quantity'];
			} else {
				++$quantity[$key];
			}
			foreach ($quantity as $index => $output) {
				$newQuantity .= $output;
				if ($index != count($quantity) - 1) {
					$newQuantity .= ',';
				}
			}
			$update = "UPDATE registered_accounts SET quantity='" . $newQuantity . "' WHERE email='" . $email . "'";
			if (mysqli_query($con, $update)) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . mysqli_error($con);
			}
		}
	}
} else {
	$cart[count($cart)] = $prodId;
	if (isset($_GET['quantity'])) {
		$quantity[$key] += $_GET['quantity'];
	} else {
		$quantity[count($quantity)] = "1";
	}
	foreach ($quantity as $index => $output) {
		$newQuantity .= $output;
		if ($index != count($quantity) - 1) {
			$newQuantity .= ',';
		}
	}
}
$newQuantity = arrayToString($quantity);
$newCart = arrayToString($cart);
$update = "UPDATE registered_accounts SET cart='" . $newCart . "', quantity='" . $newQuantity . "' WHERE email='" . $email . "'";
if (mysqli_query($con, $update)) {
	echo "Record updated successfully";
} else {
	echo "Error updating record: " . mysqli_error($con);
}
// retrieve data for arrays
function findArray($queryz, $rowName)
{
	include 'config.php';
	$array = [];
	$resultz = mysqli_query($con, $queryz) or die(mysqli_error($con));
	while ($row = mysqli_fetch_array($resultz)) {
		$array = explode(",", $row[$rowName]);
	}
	return $array;
}
// retrieve for a variable
function findData($queryz, $rowName)
{
	include 'config.php';
	$data = '';
	$resultz = mysqli_query($con, $queryz) or die(mysqli_error($con));
	while ($row = mysqli_fetch_array($resultz)) {
		$data = $row[$rowName];
	}
	return $data;
}
// a function that returns a string separated by commas
function arrayToString($array)
{
	$string = '';
	foreach ($array as $index => $output) {
		$string .= $output;
		if ($index != count($array) - 1) {
			$string .= ',';
		}
	}
	return $string;
}
?>