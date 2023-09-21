<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/coupon-customer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon</title>
  </head>
  <body>
  <nav>
      <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="./ticket-customer.php">Ticket</a></li>
          <li><a href="./flight-customer.php">Flight</a></li>
          <li><a href="./car-service.php">Car-Service</a></li>
          <li id="current"><a href="./coupon.php">Coupon</a></li>
          <li><a href="./leisure.php">Leisure</a></li>
          <li><a href="./help.php">Help</a></li>
          <li><a href="./feedback.php">Feedback</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./signup.php">Signup</a></li>
          <li><a href="../backend/logout.php">Logout</a></li>
          <li>
          <?php
              if (!isset($_SESSION)){
                session_start();
              }
              if (!empty($_SESSION['cid'])){
                echo $_SESSION['cid'];
              }
          ?>
          </li>
      </ul>
    </nav>
    <div class="container">
      <h1>Enter a coupon code!</h1>
      <div id="coupon-ad">
        <h2 id="title">To win various and exciting offers starting from:</h2>
        <h2>30% discount on all ticket prices</h2>
        <h2>Free Pickup and Drop Service</h2>
        <h2>Treat yourself and your loved ones with amusing acitivites!</h2>
      </div>

      <form id="code-box" action="../backend/coupon-customer-db.php" method="post">
        <div class="input-group">
          <label>Code: </label>
          <input id="code" type="text" name="code" maxlength="5" required>
        </div>
        <button type="submit">Enter</button>
        <p>
          <?php
            if(isset($_GET['enter'])){
              echo $_GET['enter'];
            }
          ?>
        </p>
      </form>
    </div>
    
    
  </body>
</html>