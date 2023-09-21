<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/feedback-admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>

<body>
  <nav>
      <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="./coupon.php">Coupon</a></li>
          <li id="current"><a href="./feedback.php">Feedback</a></li>
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
    <h1>Admin Feedback Panel</h1>
    <table id = "feedback-box">
        <tr class = "feedbacks">
            <th class = "column">Customer-ID</th>
            <th class = "column">Date</th>
            <th class = "column">Description</th>
        </tr>
        <?php include '../backend/feedback-admin-db.php'; ?>
    </table>
  

</body>