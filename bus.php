
<?php
session_start();
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
    <title>  myTicket</title>
    <link rel="stylesheet" href="bus.css" type="text/css"/>

</head>

<body>
<div class="wrapper">
    <div class ="heading">
          myTicket
    </div>

    <div class="navigation">
        wellcome
    </div>

    <div class="content">

        <form action="bus_schedule.php" method="POST" name="Form" onsubmit="return validateForm()">

            <span class="from"> Enter City(From):</span>

            <select name="fromcity" class="fromcity">

                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>


            </select>

            &nbsp<br>

            <span class="from"> Enter City (To):</span> &nbsp &nbsp

            <select name="tocity" class="tocity">

                <option value="Chittagong">Chittagong</option>
                <option value="Dhaka">Dhaka</option>


            </select><br><br>

            <span class="from">Date of Departure: </span> &nbsp
            <input id="date" name="date" class = "date" type="date" value=""/><br><br>

            <button class="search" type="search">Search</button>

        </form>

    </div>
    <div class="sidebar">


        <a <?php if(!empty($_SESSION['name'])) { ?>
                hidden <?php }?> href="login.php" class="login">Log in</a><br><br>

        <a <?php if(empty($_SESSION['name'])) { ?>
            hidden <?php }?> href="logout.php" class="login">Log Out</a><br><br>
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
</html>

<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["Form"]["formcity"].value;
        var b=document.forms["Form"]["todate"].value;
        var c=document.forms["Form"]["date"].value;

        if (a==null || a=="",b==null || b=="",c==null || c=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
</script>