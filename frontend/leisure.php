<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/leisure.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featherweight Airlines Leisure Activities</title>
</head>
<body>
    <nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
          <li><a href="./ticket-customer.php">Ticket</a></li>
          <li><a href="./flight-customer.php">Flight</a></li>
          <li><a href="./car-service.php">Car-Service</a></li>
          <li><a href="./coupon.php">Coupon</a></li>
          <li id="current"><a href="./leisure.php">Leisure</a></li>
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
    <div class="container">     
        <h1>Featherweight Airlines Leisure Activities</h1>
        <div class="row">
            <div class="service">
                <form action="">
                    <h2>Wi-Fi Access</h2>
                    <p>Stay connected at 35,000 feet with our in-flight Wi-Fi! Enjoy high-speed internet access for just 5$ per hour. Whether you need to catch up on work, browse social media, or watch your favorite TV shows, our Wi-Fi makes it easy. Simply connect to the network and start browsing. Stay connected and productive during your flight with our affordable Wi-Fi service.</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
            <div class="service">
                <form action="">
                    <h2>Vegetarian</h2>
                    <p>At Featherweight Airlines, we understand and respect our passengers' dietary preferences. That's why we offer delicious vegetarian meals on board, including our popular Vegetable Curry with Rice. This flavorful blend of chickpeas, carrots, onions, and potatoes in a creamy coconut curry sauce is served with steamed rice for a satisfying and delicious meal. Thank you for choosing Featherweight Airlines, and we look forward to serving you</p>
                    <button type="button" class="submit-btn">Select</button>
                </form>    
            </div>
            <div class="service">
                <form action="">
                    <h2>Lounge Access</h2>
                    <p>Upgrade your pre-flight experience with Lounge access. Enjoy a comfortable and quiet space to work or relax, with complimentary Wi-Fi, refreshments, and dedicated staff on hand to assist you. Upgrade your travel experience today</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
            <div class="service">
                <form action="">
                    <h2>Destination Experiences</h2>
                    <p>Discover Dhaka during your layover with our destination experiences. Explore the city, sample local cuisine, and immerse yourself in the culture with our tours and activities. For transit passengers with a 12-hour or more layover and those eligible for on-arrival visas, book your destination experience today</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
        </div>   
    </div>
</body>
</html>