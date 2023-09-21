<?php
    require_once("dbconnect.php");

    $car = $_POST['car'];
    $pickUp = $_POST['pickUp'];
    $dropOff = $_POST['dropOff'];
    $airportCode = $_POST['airportCode'];

    if (isset($car) and isset($pickUp) and isset($dropOff) and isset($airportCode)){
        mysqli_query($conn, "INSERT into car_service VALUES('$car', '$pickUp', '$dropOff', '$airportCode')");
    }
    
    header("location:../frontend/car-service.php");
?>