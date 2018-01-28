<?php



  include_once("config.php");
    
     
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['number'];
        $password=$_POST['password'];
        $rep=$_POST['rep'];


      if (empty($name) || empty($email) || empty($phone) || empty($password) || !isset($_POST['agree']) || ($password!= $rep) ) 
      {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Contact Number is empty.</font><br/>";
		}
        if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		
		if($password!= $rep)
		{
			echo "<font color='red'>Password and Retype-Password does not match </font><br/>";
		}
        
         
      
        
        if(!isset($_POST['agree'])) {
			echo "<font color='red'>Please accept our Terms and Condition</font><br/>";
		}
        
        
       
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
    
    else { 
		
		$result = mysqli_query($conn,"INSERT INTO user_info(name,email,password,phone) VALUES('$name','$email','$password',
			'$phone')");
				
	
		echo "<font color='green'>You have registered successfully."; 
		echo "<br/><a href='login.php'>Sign in</a>";
	}

?>


        