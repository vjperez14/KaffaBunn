<?php
    require("config.php");
    $firstname = "";
    $lastname = "";
    $city = "";
    $street = "";
    $streetopt = "";
    $town = "";
    $zip = "";
    $phone = "";
    $email = "";
    
    if (isset($_SESSION['email'])) {
        $query = "SELECT firstname, lastname, email, city, street, streetopt, town, zip, phone  FROM registered_accounts WHERE email = '".$_SESSION['email']. "'";

        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $city = $row["city"];
            $street = $row["street"];
            $streetopt = $row["streetopt"];
            $town = $row["town"];
            $zip = $row["zip"];
            $phone = $row["phone"];
            $email = $row["email"];
        }
    }



?>