<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="./css/signup.css">
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
            <li><a href="./login.php">Login</a></li>
            <li id="current"><a href="./signup.php">Signup</a></li>
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
        <p id="error" style="text-align:center"> 
            <?php 
            if (isset($_GET['error'])){
                echo $_GET['error'];} 
            ?>
        </p>

        <form method="post" action="../backend/signup-db.php">
            <div>
                <label>User Name: </label>
                <input name="uid" type="text" class="input-field" placeholder="User Name" required>
            </div>
            <div>
                <label>First Name: </label>
                <input name="fname" type="text" class="input-field" placeholder="First Name" required>
            </div>
            <div>
                <label>Last Name: </label>
                <input name="lname" type="text" class="input-field" placeholder="Last Name" required>
            </div>
            <div>
                <label>Phone: </label>
                <input name="phone" type="text" class="input-field" placeholder="Phone Number" required>
            </div>
            <div>
                <label>Address: </label>
                <input name="address" type="text" class="input-field" placeholder="Address" required>
            </div>
            <div>
                <label>Email: </label>
                <input name="email" type="email" class="input-field" placeholder="Email" required>
            </div>
            <div>
                <label>Password: </label>
                <input name="pass" type="password" class="input-field" placeholder="Password" required>
            </div>
            
            
            <div id="term">
                <select name="userMode" id="user-mode">
                    <option value="Customer">Customer</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="checkbox" id="check-box" required><span> I agree to the terms & conditions</span>
            </div>
            
            
            <button type="submit" id="submit-btn">Sign Up</button>
            <p id="account-exists">Already have an account: <a href="./login.php">Log in</a></p>
        </form>
    </div>

</body>
</html>