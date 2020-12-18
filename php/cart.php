<?php
include('config.php');
session_start();
// change the user id to the session user
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$email = $_SESSION['email'];
	$email = stripslashes($email);
	$query = "SELECT * FROM `registered_accounts` WHERE email='$email'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$product;
	$quantity;
	$total = (int)0;
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			// split the array
			$product = explode(",", $row["cart"]);
			$quantity = explode(",", $row["quantity"]);
		}
		foreach ($product as $key => $item) {
			if ($key != 0) {
				$query1 = "SELECT * FROM `products` WHERE product_id=$item";
				$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
				// query the products table to find the details
				$category = $name = $desc = $price = '';
				if (mysqli_num_rows($result1) > 0) {
					while ($row = mysqli_fetch_array($result1)) {
						$name = $row["name"];
						$category = $row["category"];
						$desc = $row["description"];
						$price = $row["price"];
					}
				}
				// display the cart
				$id = ($item >= 25 && !$item <= 24) ? $item - 24 : (($item >= 13) ? $item - 12 : $item);
				echo "<tr>" .
					"<td class='w-25'>" .
					"<img src='images/" . $category . $id . ".jpg' class='img-fluid img-thumbnail' alt='" . $name . "'>" . $name .
					"</td>" .
					"<td>" . $quantity[$key] . "</td>" .
					"<td>₱" . $quantity[$key] * $price . ".00</td>" .
					"<td>&nbsp &nbsp <a href='#'onclick='remove(" . $item . ");'>" .
					"<i class='fa fa-times'></i></a></td>" .
					"</tr>";
				$total += $quantity[$key] * $price;
			}
		}
		echo "<tr>" .
			"<td></td>" .
			"<td> TOTAL:</td>" .
			"<td></td>" .
			"<td class='price text-success' id='total' style=\"font-weight:bold;font-size:24px;\">₱" . $total . ".00</td>" .
			"</tr>";
	}
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
