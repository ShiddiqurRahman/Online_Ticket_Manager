<?php

ob_start();
session_start();
if($_SESSION['name']==null)
{
    header('location:login.php');
}

?>



<!doctype html>
<html>
<head>
    <title>ticketer.com</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>

</head>


<body>
<div class="wrapper">
    <div class ="heading">
        ticketer.com
    </div>

    <div class="navigation">
        <ul>
            <li><a href="admin.php">HOME</a></li>
            <li><a href="alluser.php">ALL USER</a></li>
            <li><a href="booking.php".php">See Booking</a></li>



        </ul>
    </div>


    <div class="content">










        <table class="infor  fix"border="1" >
            <tr>
                <th>Sl</th>
                <th>NAME</th>

                <th>Seat</th>
                <th>Conatct</th>
                <th>Action</th>


            </tr>
            <?php
            
            $i=0;
            

           $link="delete_booking.php";
           $t='true';
           include_once('config.php');
           $sql = "SELECT * FROM `desh travels` Where val='$t'  ";
            if($result = mysqli_query($conn, $sql))
            {
                if(mysqli_num_rows($result) > 0)
                {
                     while($row =mysqli_fetch_assoc($result)) {
                        $post_id=$row['id'];
                        $i++
                        ?>
                        <tr>
                            <td><?php  echo $i?></td>
                            <td><?php  echo $row["booked_by"];?></td>

                        <td><?php   $_SESSION['name1']=$row["name"];
                        echo $row["name"];?></td>

                        <td><?php  echo $row["contact"];?></td>
                       <?php echo "<td> <a href=\"delete_booking.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Cancel</a></td>";?>



                </tr>   <?php
            }
                }
           
                else{
                echo "<p>No matches found for <b>$query</b></p>";
                 }
            }   
            

            else
            {
                echo "yeh";
            } 

   




            ?>


        </table>




















    </div>
    <div class="sidebar">
        <br> <hr><br>

        <a href="logout.php" class="login">Log out</a><br><br>
        <hr><br><br>
        <div class="sidebarmenu">

        </div>

    </div>
    <div class="footer">
        Developed by Tariq, Dilruba
    </div>
</div>
</body>
</html>
