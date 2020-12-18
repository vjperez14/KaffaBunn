<?php
    include('config.php');

    // check if email is already taken
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {
        // validate email
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $sqlcheck = "SELECT email FROM registered_accounts WHERE email = '$email' ";
        $checkResult = $con->query($sqlcheck);

        // check if email already taken
        if($checkResult->num_rows > 0) {
            echo "Sorry! email has already registered.";
        }

    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {// save records into the database
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['registeremail'];
        $password = $_POST['registerpassword'];
        $city = $_POST['regcity'];
        $street = $_POST['regstreet'];
        $streetopt = $_POST['regstreetopt'];
        $town = $_POST['regtown'];
        $zip = $_POST['regzip'];
        $phone = $_POST['regphone'];
        $save = $_POST['save'];
        $password = md5($password);

        // insert into table
        $sql = "INSERT INTO registered_accounts (firstname, lastname, email, password, city, street, streetopt, town, zip, phone, cart, quantity) VALUES ('$fname', '$lname', '$email', '$password', '$city', '$street', '$streetopt', '$town', '$zip', '$phone', '0', '0') ";
        //$result = $con->query($sql);
	$result=mysqli_query($con,$sql);
        
        // header("Location: ../registersuccess.php");
        if($result) {
            echo "<script>alert('You successfuly created your account');</script>";
	    
            // echo "<div class='alert alert-success alert-dismissible'> 
            //     <button class='close' type='button' data-dismiss='alert'>&times;</button>
            //     Registration has completed successfully.
            // </div>";
        } else {
            echo "Error: " . mysqli_error($con);
        //    echo "<div class='alert alert-danger alert-dismissible'>
        //     <button type='button' class='close' data-dismiss='alert'> &times; </button>
        //     Whoops! some error encountered. Please try again.";
        }
    }

?>