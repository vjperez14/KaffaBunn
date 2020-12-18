<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "kaffa_bunn";

    // crearte connection
    $con = new Mysqli($servername, $username, $password, $dbname);

    // check connection
    if($con->connect_error) {
    die("Connection Failed : " . $connect->error);
    } else {
     //echo "Successfully Connected";
    }
?>