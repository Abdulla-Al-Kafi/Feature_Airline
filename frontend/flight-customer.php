<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/flight-customer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./ticket-customer.php">Ticket</a></li>
            <li id="current"><a href="./flight-customer.php">Flight</a></li>
            <li><a href="./car-service.php">Car-Service</a></li>
            <li><a href="./coupon.php">Coupon</a></li>
            <li><a href="./leisure.php">Leisure</a></li>
            <li><a href="./help.php">Help</a></li>
            <li><a href="./feedback.php">Feedback</a></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="./signup.php">Signup</a></li>
            <li><a href="../backend/logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Book a flight</h1>
        <form action="../backend/flight-book-db.php" method="post">
            <div id="type">
                <select name="trip-type" id="trip-type">
                    <option value="oneWay">One Way</option>
                    <option value="roundTrip">Round Trip</option>
                </select>
                <select name="passenger" id="passenger">
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adults</option>
                    <option value="3">3 Adults</option>
                    <option value="4">4 Adults</option>
                </select>
                <select name="seat-type" id="seat-type">
                    <option value="economy">Economy</option>
                    <option value="bussiness">Business</option>
                </select>
            </div>
            <div id="fly">
                <select name="from" id="from" required>
                    <option disabled selected hidden>From</option>
                    <option value="DAC">Dhaka (DAC)</option>
                    <option value="CGP">Chittagong (CGP)</option>
                    <option value="BZL">Barishal (BZL)</option>
                </select>
                <input name="flight-date" type="date" required>
                <select name="to" id="to" required>
                    <option disabled selected hidden>To</option>
                    <option value="Shah Amanat Airport">Chittagong (CGP)</option>
                    <option value="Barisal Airport">Barishal (BZL)</option>
                    <option value="Hazrat Shahjalal Airport">Dhaka (DAC)</option>
                </select>
                <input name="reach-date" type="date" required>
            </div>
            <button type="submit">Book</button>
        </form>
        <h3>Current Flight Schedule</h3>
        <table id="flight-schedule">
            <tr>
                <th>Current Airport</th>
                <th>Desination Airport</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
            </tr>
            <?php include("../backend/flight-customer-db.php")?>
        </table>
    </div>
</body>
</html>