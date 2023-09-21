<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <?php
                if(!isset($_SESSION)){
                  session_start();
                }
                if (!isset($_SESSION['aid'])){
                    ?>
                    <li><a href="./ticket-customer.php">Ticket</a></li>
                    <li><a href="./flight-customer.php">Flight</a></li>
                    <li><a href="./car-service.php">Car-Service</a></li>
                    <?php
                }
            ?>
            <li><a href="./coupon.php">Coupon</a></li>
            <?php
                if (!isset($_SESSION['aid'])){
                    ?>
                    <li><a href="./leisure.php">Leisure</a></li>
                    <li><a href="./help.php">Help</a></li>
                    <?php
                }
            ?>
            <li><a href="./feedback.php">Feedback</a></li>
            <li id="current"><a href="./login.php">Login</a></li>
            <li><a href="./signup.php">Signup</a></li>
            <li><a href="../backend/logout.php">Logout</a></li>
            <li>
            <?php
                if (!empty($_SESSION['cid'])){
                echo $_SESSION['cid'];
                }
                else if (!empty($_SESSION['aid'])){
                echo $_SESSION['aid'];
                }
            ?>
            </li>
        </ul>
    </nav>

    <div id="form-box">
    
        <p style="text-align:center"> 
        <?php
            if (isset($_GET['error'])){
                echo $_GET['error'];} ?>
        </p>
        <form id="login" method="post" action="../backend/login-db.php">
            <div>
                <label>Email: </label>
                <input name="email" type="email" class="input-field" placeholder="Email" required>
            </div>
            <div>
                <label>Password: </label>
                <input name="pass" type="password" class="input-field" placeholder="Enter Password" required>
            </div>
            
            <div>
                <input type="checkbox" id="check-box" >
                <span>Remember Password</span>
            </div>
            
            
            <button type="submit" id="submit-btn">Log In</button>
            
            <p id="account-exists">Don't have an account: <a href="./signup.php">Click here</a></p>
        </form>
    </div>


</body>
</html>