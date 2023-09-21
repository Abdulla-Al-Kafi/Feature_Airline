<?php
    require_once("dbconnect.php");

    # POST variables
    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encryptedPass = password_hash($pass, PASSWORD_DEFAULT);

    $userMode = $_POST['userMode'];
    
    $result1 = mysqli_query($conn, "SELECT uid FROM user WHERE uid='$uid'");
    $result2 = mysqli_query($conn, "SELECT email FROM user WHERE email='$email'");
    
    # Check if there is any row with same user id
    if ($result1->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Username is already taken");
        exit;
    }
    # Check if there is any row with same user email
    else if ($result2->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Email already exists");
        exit;
    }
    # Otherwise INSERT the user in the user table
    else{
        mysqli_query($conn, "INSERT INTO user VALUES('$uid', '$fname', '$lname', '$phone', '$address', '$email', '$encryptedPass')");
        
        # Either INSERTing in customer table
        if ($userMode == 'Customer'){
            mysqli_query($conn, "INSERT INTO customer VALUES('$uid', 'C-$uid', 0, 'regular')");
        }
        # Or INSERTing in admin table
        else if ($userMode == 'Admin'){
            mysqli_query($conn, "INSERT INTO admin VALUES('$uid', 'A-$uid')");
        }
    }
    # Going to login page after signup
    header("Location: ../frontend/login.php");

?>