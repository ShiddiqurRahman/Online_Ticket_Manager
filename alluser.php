<?php

ob_start();
session_start();
if($_SESSION['name']!='admin')
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

                <th>Email</th>
                <th>Conatct</th>
                <th>Password</th>

            </tr>
            <?php
            include('config.php');
            $i=0;
            $sql = "SELECT * FROM user_info";
            $result= mysqli_query($conn,$sql);


            while($row =mysqli_fetch_assoc($result)) {
                $i++
                ?>
                <tr>
                    <td><?php  echo $i?></td>
                    <td><?php  echo $row["name"];?></td>

                    <td><?php  echo $row["email"];?></td>

                    <td><?php  echo $row["phone"];?></td>

                    <td><?php  echo $row["password"];?></td>

                </tr>   <?php
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