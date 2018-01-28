<?php
/**
 * Created by PhpStorm.
 * User: Shiddiqur R Sumon
 * Date: 02-May-17
 * Time: 10:46 PM
 *
 */

include('config.php');
$fromcity=$_POST['fromcity'];
$tocity=$_POST['tocity'];
$date=$_POST['date'];

echo $date;
$sql2= "SELECT * FROM bus WHERE  date_of_departure='$date' ";
$result =mysqli_query($conn,$sql2);

while($row =mysqli_fetch_assoc($result)) {
    $abc=$row["bus_name"];
    $i++
    ?>
    <tr>
        <!--                    <td>--><?php // echo $row["bus_name"];?><!--</td>-->
        <td><?php echo "<a href='".$link_address."'>$abc</a>";?></td>
        <td><?php  echo $row["city_from"];?></td>
        <td><?php  echo $row["city_to"];?></td>
        <td><?php  echo $row["date_of_departure"];?></td>


    </tr>   <?php
}


?>