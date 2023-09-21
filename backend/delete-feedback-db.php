<?php

require_once("dbconnect.php");

$fid = $_GET['fid'];

mysqli_query($conn, "delete from feedback where feed_id = '$fid'");

header("location:../frontend/feedback-admin.php");

?>