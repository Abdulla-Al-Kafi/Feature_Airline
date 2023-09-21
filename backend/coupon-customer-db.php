<?php
    require_once("dbconnect.php");

    $code = $_POST['code'];
    $currentDate = date("Y-m-d");

    $result = mysqli_query($conn, "SELECT type FROM coupon WHERE coupon_code='$code' AND validity > '$currentDate'");
    

    if ($result->num_rows == 0){
        header("location:../frontend/coupon-customer.php?enter=Code is either invalid or expired");
    }else{
        $row = mysqli_fetch_array($result);
        mysqli_query($conn, "DELETE FROM coupon WHERE coupon_code='$code'");
        header("location:../frontend/coupon-customer.php?enter=Congratulations! You got $row[0]!");
    }

?>