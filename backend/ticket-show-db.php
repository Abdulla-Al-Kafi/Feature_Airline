<?php
    require_once('dbconnect.php');

    $result = mysqli_query($conn, 'SELECT book_id, seat_type, cid, book_date, fdate, ftime FROM ticket');

    if($result->num_rows == 0){
        ?> <h3><?php echo "You did not book any flight yet"?></h3>
    <?php
    }
    else{
        while($row = mysqli_fetch_array($result)){
            if ($row[2] == $_SESSION['cid']){
            ?>
            <div id="ticket-show">
                <div>
                    <h4>Book ID: <?php echo $row[0];?></h4>
                    <h4>Purchased Date: <?php echo $row[3];?></h4>
                </div>
                <div>
                    <h4>Seat Type: <?php echo $row[1];?></h4>
                </div>
                <div>
                    <h4>Departure Date: <?php echo $row[4];?></h4>
                    <h4>Departure Time: <?php echo $row[5];?></h4>
                </div>
            </div>

        <?php    
        }else{
            ?><h3><?php echo "You did not book any flight yet"?></h3>
            <?php
        }
    }}
?>