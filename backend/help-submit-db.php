<?php

    require_once("dbconnect.php");

    session_start();

    $cid = $_SESSION['cid'];
    $hid = $_POST['hid'];
    $hdate = date("Y-m-d");
    $htime = date("H:i:s");

    mysqli_query($conn, "INSERT into ask VALUES('$cid', '$hid', '$hdate', '$htime')");

    header("location:../frontend/help.php");

?>