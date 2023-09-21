<?php
    require("dbconnect.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    # User exists?
    $result1 = mysqli_query($conn, "SELECT uid, password FROM user WHERE email='$email'");
    $row1 = mysqli_fetch_array($result1);
    
    # For customer
    $result2 = mysqli_query($conn, "SELECT cid FROM customer WHERE uid='$row1[0]'");
    $customer = mysqli_fetch_array($result2);

    # For admin
    $result3 = mysqli_query($conn, "SELECT aid FROM admin WHERE uid='$row1[0]'");
    $admin = mysqli_fetch_array($result3);

    # Check if there is any row with the user id in the user table
    if ($result1->num_rows == 0){
        header("location:../frontend/login.php?error=User not found");
        exit;
    }
    # If row exists then verify password
    else{
        if (password_verify($pass, $row1[1])){
            
            session_start();
            
            $_SESSION['cid'] = null;
            $_SESSION['aid'] = null;

            # if the user is customer set session to customer
            if (!empty($customer[0])){
                $_SESSION['cid'] = $customer[0];
            }
            # if the user is admin set session to admin
            else if (!empty($admin[0])){
                $_SESSION['aid'] = $admin[0];
            }
            
            # Go to homepage
            header("location:../index.php");
        }
        # If password is incorrect, show incorrect password
        else{
            header("location:../frontend/login.php?error=Password incorrect");
        }
    }
?>