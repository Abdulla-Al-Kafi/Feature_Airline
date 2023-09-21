<?php
    
    require_once("dbconnect.php");

    session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $cid = $_SESSION['cid'];
    $date = date("Y-m-d");

    
    mysqli_query($conn, "INSERT INTO feedback(cid, feed_date, description) VALUES('$cid', '$date', '$feedback')");

    header("location:../frontend/feedback-customer.php?accepted=Thank You $cid");

?>