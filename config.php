<?php 


function Signin(){
session_start();
   

$conn = mysqli_connect("localhost","root","","ticket");
 

  
   $sql = "SELECT * FROM user_info where name = '$_POST[username]' AND password = '$_POST[password]'";
    if($result = mysqli_query($conn, $sql))
    {
 
     if(mysqli_num_rows($result) > 0)
     {
         while($row = mysqli_fetch_array($result))
                  {
               
                           $fname=$row['name'];
                          $_SESSION['name'] = $fname ;
                        if($fname=="admin")
                            {
                                      header("Location:admin.php");
                             }
                        else
                                 header("Location:bus.php");
                   

                        
                     }
     }
     
     else 
         header("Location:login.php");

     
   }





}





 if(isset($_POST['btn-login'])) 
     { 
   SignIn(); 
   }
             
 ?>