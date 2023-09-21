<?php
  session_start();

  if (isset($_SESSION['cid'])){
    header("location:./index-customer.php");
  }
  else if (isset($_SESSION['aid'])){
    header("location:./index-admin.php");
  }
  else{
    header("location:./index-customer.php");
  }
?>