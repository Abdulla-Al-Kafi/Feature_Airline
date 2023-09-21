<!DOCTYPE html>
<html lang="en">
<head>
  <!-- font link -->
  
  <link rel="stylesheet" href="./frontend/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
  
  <title>Home</title>
 
</head>
<body>
  <nav>
      <ul>
        <li><a href="./index.php">Home</a></li>
          <li><a href="./frontend/coupon.php">Coupon</a></li>
          <li><a href="./frontend/feedback.php">Feedback</a></li>
          <li><a href="./frontend/login.php">Login</a></li>
          <li><a href="./frontend/signup.php">Signup</a></li>
          <li><a href="./backend/logout.php">Logout</a></li>
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
  
    <div class="hero">
    <div class="banner">
      <div class="left-column">
        <h1>Featherweight<span> Airlines</span></h1>
        <h3>Discover the world<span> with us</span></h3>
        <p>
          Bonjour, Hola, Ni hao, Konnichiwa, Assalamu alaikum, Hello! Welcome to our Destination experiences, where we help you explore the world and create unforgettable memories.
        </p>
        <div class="btn">
          <button type="button" class="book-btn">
            <h2><?php ?></h2>
            <a href="./frontend/flight-customer.php" class="1">Book Now</a>
          </button>
        </div>
      </div>


      <div class="right-column"> 
        <img src="./frontend/img/bg2.png" alt="">
      </div>

    </div>
  </div>
</body>
</html>