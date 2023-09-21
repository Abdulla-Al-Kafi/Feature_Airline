<?php

require("dbconnect.php");

$result = mysqli_query($conn, "select a.airport_name, a.destination, s.f_date, s.f_time from airport a, schedule s, flight f where a.airport_code = f.airport_code and f.fid = s.fid");

if ($result->num_rows != 0){
    while ($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row[0]?></td>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[3]?></td>
        </tr>
<?php        
        }
    }
?>