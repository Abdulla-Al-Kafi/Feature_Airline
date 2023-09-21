<?php
    require_once("dbconnect.php");

    $result = mysqli_query($conn, "SELECT * from help");

    if ($result->num_rows != 0){
        while ($rows = mysqli_fetch_array($result)){
            $hid = $rows[0];
            $htype = $rows[1];
    ?>

    <option value="<?php echo $hid ?>"><?php echo $htype?></option>
<?php
        }
    }

?>