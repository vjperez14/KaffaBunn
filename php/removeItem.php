<?php
require('config.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  	$email = $_SESSION['email'];
  	$email = stripslashes($email);
  	$email = mysqli_real_escape_string($con,$email);
	$item = $_POST['id'];
 	if (empty($item)) {
 		echo "Data is empty";
  	} 
  	else {
  		$isEmpty = true;
  		$findQuery = "SELECT cart,quantity FROM `registered_accounts` WHERE email='$email'";
  		$tempCart= $tempQuantity= $cart= $quantity=[];
  		$newCart= $newQuantity='';
  		$result = mysqli_query($con,$findQuery) or die(mysqli_error($con));
  		while ($row=mysqli_fetch_array($result)) {
  			$cart = explode(",",$row["cart"]);
  			$quantity = explode(",",$row["quantity"]);
  			if(!empty($row['cart'])){
  				$isEmpty = false;
  			}
  		}
  		if(!$isEmpty){
  			foreach ($cart as $key => &$output) {
	  			if($output == $item){
	  				unset($cart[$key]);
	  				unset($quantity[$key]);
	  				$cart = array_values($cart);
	  				$quantity = array_values($quantity);
	  				// both the item and quantity will share the same index
	  			}
	  		}
	  		// $array = array(0, 1, 2, 3);
			// unset($array[2]);
			// $array = array_values($array);
			// $tempCart = $array;
	  		foreach ($cart as $key => &$report) {
	  			echo ",".$report;
	  			$newCart .= $report;
	  			$newQuantity .= $quantity[$key];
	  			if($key != count($cart)-1){
	  				$newCart .=",";
	  				$newQuantity .=",";
	  			}
	  		}
	    	$query = "UPDATE registered_accounts SET cart='".$newCart."', quantity='".$newQuantity."' WHERE email='" . $email . "'";
	        if (mysqli_query($con, $query)) {
			  echo "\n Record updated successfully";
			} else {
			  echo "Error updating record: " . mysqli_error($con);
			}
  		}
  		else{
  			echo "EMpty";
  		}
  	}
}

?>