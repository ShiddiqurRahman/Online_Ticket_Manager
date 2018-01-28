
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

        <form action="confirm.php" name="Form" onsubmit="return validateForm()" method="POST">

                   <div class="formtext" >
                             <table>
                                 <tr>
                                     <td>
                                         Name:<br><br>
                                     </td>
                                     <td>
                                         <input type="text" name="name" placeholder="Enter name"><br><br>

                                     </td>

                                 </tr>
                                 <tr>
                                     <td>
                                         Email: <br><br>
                                     </td>
                                     <td>
                                         <input type="text" name="email" placeholder="Enter e-mail"><br><br>

                                     </td>
                                 </tr>

                                  <tr>
                                      <td>
                                          Enter phone: <br><br>
                                      </td>
                                      <td>
                                          <input type="text" name="phone" placeholder="Enter phone number"><br><br>
                                      </td>
                                  </tr>
                                 <tr>
                                     <td>

                                     </td>
                                     <td>
                                         <input type="submit" style="float: right" value="confirm" class="submit">
                                     </td>

                                 </tr>

                                 <tr>
                                     <td>
                                         <?php
                                         $i=0;
                                         foreach ($_POST['check_list'] as $a)
                                         {
                                            echo "<input type='hidden' name='$i' value='$a' >";
                                            $i++;
                                         }
                                         ?>
                                         <input type="hidden" name="seatCount" value="<?php echo $i;?>">

                                     </td>
                                 </tr>


                             </table>
              </div>


        </form>

    </div>

<!--    --><?php
//        ($_POST['check_list']);
//        //print ($_POST['check_list']);
//        foreach ($_POST['check_list'] as $a)
//        {
//            echo $a;
//        }
//    ?>
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
</html>

<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["Form"]["name"].value;
        var b=document.forms["Form"]["email"].value;
        var c=document.forms["Form"]["phone"].value;

        if (a==null || a=="",b==null || b=="",c==null || c=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
</script>