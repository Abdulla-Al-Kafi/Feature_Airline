<?php

    require_once("dbconnect.php");

    session_start();

    $code = $_POST['code'];
    $validity = $_POST['validity'];
    $type = $_POST['type'];
    $aid = $_SESSION['aid'];

    mysqli_query($conn, "INSERT INTO coupon VALUES('$code', '$validity', '$type', '$aid')");
    header("location:../frontend/coupon-admin.php?successful=Coupon code is now stored");

?>