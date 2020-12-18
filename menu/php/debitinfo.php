<?php
    include('config.php');
    session_start();
    $balance = "";
    $error = "Information does not match";
    $success = "Checkout Successfully";

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
    if (isset($_SESSION['email'])) {
        
        $query = "SELECT firstname, lastname, email, city, street, streetopt, town, zip, phone, cart  FROM registered_accounts WHERE email = '".$_SESSION['email']. "'";

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

        $sql = "INSERT INTO orders_table (cust_name) VALUES ('$firstname')";
        $result = $con->query($sql);
        


        echo $firstname;






        $cardnum = $_REQUEST['cardnum'];
        $csv = $_REQUEST['csv'];
        $month = $_REQUEST['expdatem'];
        $year = $_REQUEST['expdatey'];

        $query = "SELECT cardnumber, balance FROM debit_card WHERE cardnumber = '$cardnum' and csv='$csv' and expdatem = '$month' and expdatey = '$year'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            while($row=mysqli_fetch_array($result)){
                $balance = $row['balance'];
            }
            $sub = (int)substr($_SESSION['subTotal'],3);
            $newsub = (($sub + 50)- 45);
            $newbalance = $balance-$newsub;
    
            $sql = "UPDATE debit_card SET balance = '$newbalance' WHERE cardnumber = '$cardnum'";
            $res = $con->query($sql);
    
            $newCart ="";
            $newQuantity ="";
            $email = $_SESSION['email'];
            echo $sub;
            
            if ($res) {
                $query = "UPDATE registered_accounts SET cart='".$newCart."', quantity='".$newQuantity."' WHERE email='" . $email . "'";
                $res = $con->query($query);
            }
        } else {
            // echo "<script type='text/javascript'>alert('$error'); window.location.href='../checkout.php'</script>";
        }  
    } else {
        echo "something went wrong.";
    }

?>