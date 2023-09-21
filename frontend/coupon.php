<?php

# For routing to either customer coupon page or to admin coupon page

session_start();

if (isset($_SESSION['cid'])){
  header("location:./coupon-customer.php");
  
}
else if (isset($_SESSION['aid'])){
  header("location:./coupon-admin.php");
}
else{
  header("location:./login.php");
}


?>
