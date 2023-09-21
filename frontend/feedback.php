<?php
# For routing to either customer feedback page or to admin feedback page

session_start();

if (isset($_SESSION['cid'])){
  header("location:./feedback-customer.php");
  
}
else if (isset($_SESSION['aid'])){
  header("location:./feedback-admin.php");
}
else{
  header("location:./login.php");
}

?>