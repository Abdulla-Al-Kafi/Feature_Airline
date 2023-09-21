<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/car-service.css">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <title>Help</title>

</head>
<body>
    <nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
          <li><a href="./ticket-customer.php">Ticket</a></li>
          <li><a href="./flight-customer.php">Flight</a></li>
          <li id="current"><a href="./car-service.php">Car-Service</a></li>
          <li><a href="./coupon.php">Coupon</a></li>
          <li><a href="./leisure.php">Leisure</a></li>
          <li><a href="./help.php">Help</a></li>
          <li><a href="./feedback.php">Feedback</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./signup.php">Signup</a></li>
          <li><a href="../backend/logout.php">Logout</a></li>
        <li><?php 
          if (!isset($_SESSION)){
            session_start();
          }
          if (isset($_SESSION['cid'])){
            echo $_SESSION['cid'];
          }
          else if (isset($_SESSION['aid'])){
            echo $_SESSION['aid'];
        }
        ?></li>
      </ul>
    </nav>
    
    <h1>Pickup and Drop Service</h1>
    <h3>Choose your ride</h3>
    <div class=container>
        <div id="photos">
          <img src="./img/toyota.png" alt="toyota" width="300" height="150">
          <img src="./img/ferrari.jpg" alt="ferrari" width="320" height="200">
          <img src="./img/bmw.png" alt="bmw" width="360" height="200">
        </div>
        <form action="../backend/car-service-db.php" method="post">
          <select name="car" id="">
            <option disabled selected hidden>Car Model</option>
            <option value="Toyota">Toyota</option>
            <option value="BMW">BMW</option>
            <option value="Ferrari">Ferrari</option>
          </select>
          <select name="pickUp" id="">
            <option disabled selected hidden>Pick Up</option>
            <option value="Home">Home</option>
            <option value="Barishal Airport">Barishal</option>
            <option value="Shah Amanat Airport">Chittagong</option>
            <option value="Hazrat Shahzalal Airport">Dhaka</option>
          </select>
          <select name="dropOff" id="">
            <option disabled selected hidden>Drop Off</option>
            <option value="Hazrat Shahzalal Airport">Dhaka</option>
            <option value="Barishal Airport">Barishal</option>
            <option value="Shah Amanat Airport">Chittagong</option>
            <option value="Home">Home</option>
          </select>
          <select name="airportCode" id="">
            <option disabled selected hidden>Airport Code</option>
            <option value="DAC">DAC</option>
            <option value="CGP">CGP</option>
            <option value="BZL">BZL</option>
          </select>
          <button type="submit">Request</button>
        </form>
    </div>
               
</body>
</html>