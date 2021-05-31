<?php
    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "l6pdxQO6O3wIFWZs";
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