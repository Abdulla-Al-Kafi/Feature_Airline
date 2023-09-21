<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/coupon-admin.css">
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
          <li id="current"><a href="./coupon.php">Coupon</a></li>
          <li><a href="./feedback.php">Feedback</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./signup.php">Signup</a></li>
          <li><a href="../backend/logout.php">Logout</a></li>
          <li>
          <?php
              if (!isset($_SESSION)){
                session_start();
              }
              if (!empty($_SESSION['aid'])){
                echo $_SESSION['aid'];
              }
          ?>
          </li>
      </ul>
    </nav>
    <h1>Admin Coupon Generator</h1>
    <div id="code-box">
      <form id="generate" action="../backend/coupon-generate-db.php" method="get">
        <h3 id="code">
          <?php
            if(isset($_GET['code'])){
              echo $_GET['code'];
            }
          ?>
        </h3>
        <button type="submit">Generate</button>
      </form>
      
      <form id="store" action="../backend/coupon-store-db.php" method="post">
          <input type="hidden" name="code" value=<?php
            if(isset($_GET['code'])){
              echo $_GET['code'];
            }?>>
          <label>Select validity date</label>
          <input id="validity"type="date" name="validity" required>
          <select name="type">
            <option value="discount">Discount</option>
            <option value="leisure">Leisure</option>
            <option value="freeCarService">Free Car Service</option>
          </select>
          <button type="submit">Store in db</button>
          <p><?php
            if(isset($_GET['successful'])){
              echo $_GET['successful'];
            }?></p>
          
      </form>

    </div>
  </body>
</html>