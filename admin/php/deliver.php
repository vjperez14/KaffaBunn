<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {
    echo "testing";
    $ref = $_POST['appticket'];
    $string = strval($ref);

    $sql = "DELETE FROM orders_table WHERE orders_id = $string";
    $result = $con->query($sql);


    header('Location: ../index.php');
}
