<?php
    include('config.php');
    session_start();
    include('config.php');
    // for transaction
    $balance = "";
    $error = "Information does not match";
    $success = "Checkout Successfully";
    // variable initialization
    $firstname = "";
    $lastname = "";
    $city = "";
    $street = "";
    $streetopt = "";
    $town = "";
    $zip = "";
    $phone = "";
    $email = "";
    $order = "";
    $quantity = "";
    // radio button options
    $option = $_POST['optradio'];
    // condition for radio button
    if ($option == "debit") {
        if (isset($_SESSION['email'])) {
            // getting info for who ever is loged-in
            $query = "SELECT firstname, lastname, email, city, street, streetopt, town, zip, phone, cart, quantity  FROM registered_accounts WHERE email = '".$_SESSION['email']. "'";
            // injecting query
            $result = mysqli_query($con, $query);
            // fetching data and putting it on the variable
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
                $cart = $row['cart'];
                $quantity = $row['quantity'];
            }
            // insert data to orders_table
            $sql = "INSERT INTO orders_table (cust_name, address, phone, email, cart, quantity, amount, status) VALUES (CONCAT('$firstname', ' ', '$lastname'), CONCAT('$streetopt',', ','$street',', ','$town',', ','$city',', ','$zip'), '$phone', '$email', '$cart', '$quantity', 0, 'Debit Card')";
            // injecting sql query
            $result = $con->query($sql);
            
            // for debit transaction form
            $cardnum = $_REQUEST['cardnum'];
            $csv = $_REQUEST['csv'];
            $month = $_REQUEST['expdatem'];
            $year = $_REQUEST['expdatey'];
            // getting the infromation to debit_cards
            $query = "SELECT cardnumber, balance FROM debit_card WHERE cardnumber = '$cardnum' and csv='$csv' and expdatem = '$month' and expdatey = '$year'";
            // injecting query
            $result = mysqli_query($con,$query) or die(mysqli_error($con));
            // validating the result of query
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                // fetching balance of debit
                while($row=mysqli_fetch_array($result)){
                    $balance = $row['balance'];
                }
                // computation for new balance
                $sub = (int)substr($_SESSION['subTotal'],3);
                $newsub = (($sub + 50)- 45);
                $newbalance = $balance-$newsub;
                
                // update debit_card table and setting the new balance
                $sql = "UPDATE debit_card SET balance = '$newbalance' WHERE cardnumber = '$cardnum'";
                // injecting the update query
                $res = $con->query($sql);
                // variable initialization
                $newCart ="";
                $newQuantity ="";
                $email = $_SESSION['email'];
                if ($res) {
                    // emptying the user's cart
                    $query = "UPDATE registered_accounts SET cart='".$newCart."', quantity='".$newQuantity."' WHERE email='" . $email . "'";
                    // injecting the query
                    $res = $con->query($query);
                    // showing alert of success
                    echo "<script type='text/javascript'>alert('$success'); window.location.href='../menu.php'</script>";
                }
            } else {
                // showing alert of error
                echo "<script type='text/javascript'>alert('$error'); window.location.href='../checkout.php'</script>";
            }  
        }
    } else {
        if (isset($_SESSION['email'])) {
            // getting info for who ever is loged-in
            $query = "SELECT firstname, lastname, email, city, street, streetopt, town, zip, phone, cart, quantity  FROM registered_accounts WHERE email = '".$_SESSION['email']. "'";
            // injecting query
            $result = mysqli_query($con, $query);
            // fetching data and putting it on the variable
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
                $cart = $row['cart'];
                $quantity = $row['quantity'];
            }
            $sub = (int)substr($_SESSION['subTotal'],3);
            $newsub = (($sub + 50)- 45);
            // insert data to orders_table
            $sql = "INSERT INTO orders_table (cust_name, address, phone, email, cart, quantity, amount, status) VALUES (CONCAT('$firstname', ' ', '$lastname'), CONCAT('$streetopt',', ','$street',', ','$town',', ','$city',', ','$zip'), '$phone', '$email', '$cart', '$quantity', '$newsub', 'Cash on Delivery')";
            // injecting sql query
            $result = $con->query($sql);
             // variable initialization
            $newCart ="";
            $newQuantity ="";
            $email = $_SESSION['email'];
            
            if ($result) {
                // emptying the user's cart
                $query = "UPDATE registered_accounts SET cart='".$newCart."', quantity='".$newQuantity."' WHERE email='" . $email . "'";
                // injecting the query
                $res = $con->query($query);
                // showing alert of success
                echo "<script type='text/javascript'>alert('$success'); window.location.href='../menu.php'</script>";
            }
        }
    }
?>