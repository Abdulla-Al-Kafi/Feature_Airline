<?php 
    require_once('dbconnect.php');

    session_start();

    $passengerNo = $_POST['passenger'];
    $seatType = $_POST['seat-type'];
    $from = $_POST['from'];
    $to = $_POST['to']; 

    $fdate = $_POST['flight-date'];
    $ftime = '12:00:00';
    $cid = $_SESSION['cid'];
    $bookID = time();
    $bookDate = date('Y-m-d');

    $price = 0;
    if ($seatType == 'economy'){
        $price = 500;
    }
    else if ($seatType == 'business'){
        $price = 1000;
    }
    $price = $price * (int)substr($passengerNo, 0, 1);
    
    
    mysqli_query($conn, "INSERT INTO ticket VALUES('$bookID', 1, 0, '$price', '$seatType', '$cid', '$bookDate', '$fdate', '$ftime')");
    
    header("location:../frontend/ticket-customer.php");
?>