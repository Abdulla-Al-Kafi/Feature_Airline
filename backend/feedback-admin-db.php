<?php
require_once("dbconnect.php");

$result = mysqli_query($conn, "SELECT * FROM feedback");

if ($result->num_rows > 0){

    while ($rows = mysqli_fetch_array($result)){
?>
        <tr class="feedbacks">
            <td class="column"><?php echo "$rows[0]"; ?></td>
            <td class="column"><?php echo "$rows[2]"; ?></td>
            <td class="column"><?php echo "$rows[3]"; ?></td>
            <td class="column" id="delete">
                <form action="../backend/delete-feedback-db.php" metdod="get">
                    <input type="hidden" name="fid" value="<?php echo $rows[1] ?>">
                    <button type="submit">Delete</button>
                </form>
                
            </td>
        </tr>
<?php
    } 
}
?>