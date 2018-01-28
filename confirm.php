<?php
/**
 * Created by PhpStorm.
 * User: Shiddiqur R Sumon
 * Date: 03-May-17
 * Time: 8:37 PM
 */

include_once("config.php");

session_start();

if(!isset($_SESSION['from']))
{
    header("Location:bus.php");

}

$from=$_SESSION['from'];
$to=$_SESSION['to'];
$date=$_SESSION['date'];
$name = $_POST['name'] ;


$contact=$_POST['phone'] ;


$bname=$_SESSION['bus'];
$dtime=$_SESSION['dtime'];














$seatCount=$_POST["seatCount"];



   $t="true";

              for ($i=0;$i<$seatCount;$i++)
              {

                $update = mysqli_query($conn, " UPDATE  `" . $bname . "` SET val='true' , booked_by='$name', contact='$contact' WHERE name= '$_POST[$i]'");


              }
            //$row = mysqli_fetch_array($query) ;






   ?>


<!doctype html>
<html>
<head>
    <title>myTicket</title>
    <link rel="stylesheet" href="bus.css" type="text/css"/>

</head>

<body>
<div class="wrapper">
    <div class ="heading">
        myTicket
    </div>

    <div class="navigation">
        <a href="bus.php">Home</a>
    </div>

    <div class="content">

        <div class = "wrapper">


            <div class = "header">

                <h2>Booking Information:</h2>
            </div>
            <div>
                <hr>
            </div>
            <div class = "info">
                <table  class = "table">
                    <tr>
                        <td><?php echo $from ?> - <?php echo $to ?> </td>
                    </tr>
                    <tr>
                        <td><?php echo $bname    ?></td>
                        <td><?php echo $dtime   ?></td>
                    </tr>

                    <tr>
                        <td><h4>Passenger Name:<h4> </td>
                        <td><?php echo $name ?></td>
                    </tr>

                    <tr>
                        <td><h4></h4> Seats Booked:</h4> </td>
                        <td>
                            <?php
//                              $seatCount=$_POST["seatCount"];
                              for ($i=0;$i<$seatCount;$i++)
                              {
                                  echo $_POST[$i];
                                  echo '&nbsp';
                              }

                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Contact Number:</h5>  </td>
                        <td><?php  echo $contact  ?></td>
                    </tr>

                </table>
            </div>
            <h3>Thanks For Your Booking, We Will Contact Soon</h3>
        </div>

    </div>
    <div class="sidebar">


        <a href="logout.php" class="login">Log out</a><br><br>
        <hr><br><br>
        <div class="sidebarmenu">
            <ul>
                <li><a href="#">Print Ticket</a></li><br>

            </ul>
        </div>

    </div>
    <div class="footer">
       
    </div>
</div>
</body>

