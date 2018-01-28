<?php
include_once('config.php');
if(isset($_POST['reg']))
{
    try{
        $fromcity=$_POST['fromcity'];
        $tocity=$_POST['tocity'];
        $date=$_POST['date'];




            $sql2= "SELECT * FROM bus WHERE  city_from='$fromcity' AND city_to='$tocity' ";
            $result =mysqli_query($conn,$sql2);
            if(!$row=$result->fetch_assoc()){


//                header('location:bus.php');
                echo "problem";

            }

    }
    catch(Exception $e){
        $error_message=$e->getMessage();
    }

}

?>


<?php
if(isset($error_message))
{

    echo '<script language="javascript">';
    echo 'alert("'. $error_message.'")';
    echo '</script>';

}

?>


















<!doctype html>
<html>
<head>
    <title>myTicket</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>

</head>


<body>

</body>
</html>















<!doctype html>
<html>
<head>
    <title>  myTicket</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

</head>


<body>
<div class="wrapper">
    <div class ="heading">
          myTicket
    </div>

    <div class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bus.php">Bus</a></li>
            <li><a href="launch.php">Launch</a></li>
            <li><a href="movies.php">Movies</a></li>
        </ul>
    </div>

    <div class="content">







        <h2>Avaible Bus</h2>
        <table border="1">
            <tr>

                <td>BUS NAME</td>
                <td>FROM</td>
                <td>TO</td>
                <td>Departure</td>
                <td>Arrival</td>
                <td>Date</td>


            </tr>

            <?php

            session_start();
            $fromcity=$_POST['fromcity'];
            $tocity=$_POST['tocity'];
            $date=$_POST['date'];
            //
            $_SESSION['from']= $fromcity;
            $_SESSION['to']=$tocity;
            $_SESSION['date']=$date;



            //



            $i=0;
            $sql = "SELECT * FROM bus WHERE  city_from='$fromcity' AND city_to='$tocity' ";
            $result= mysqli_query($conn,$sql);


            $link_address="UserHome.php";


            while($row =mysqli_fetch_assoc($result)) {

                $_SESSION['bname']=$row['bus_name'];
                $abc=$row["bus_name"];

                $i++
                ?>
                <tr>

<!--                    //<td>--><?php //echo "<a href='".$link_address."'>$abc</a>";?><!--</td>-->
                    <?php echo "<td> <a href=\"UserHome.php?name=$row[bus_name]\">$abc</a></td>";?>
                    <td><?php  echo $row["city_from"];?></td>
                    <td><?php  echo $row["city_to"];?></td>
                    <td><?php  echo $row["departure"];?></td>
                    <td><?php  echo $row["arrival"];?></td>
                    <td><?php  echo $row["date_of_departure"];?></td>


                </tr>   <?php
            }

            ?>

        </table>







    </div>
    <div class="sidebar">
        <b> New here? Join Us!!</b><br> <hr><br>
        <a href="signup.php" class="signup">Sign Up</a> <br> <br><br>
        <a href="login.php" class="login">Log In</a><br><br>
        <hr><br><br>
        <div class="sidebarmenu">
            <ul>
                <li><a href="#">Print Ticket</a></li><br>
                <li><a href="#">Cancel Ticket</a></li>
            </ul>
        </div>

    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>