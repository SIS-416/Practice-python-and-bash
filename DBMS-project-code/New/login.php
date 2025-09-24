<?php
    require('connection.php');
    session_start();
    
	

 
?>

<!DOCTYPE>
<html>

  <head>
  <title> Login</title>
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  
  </head>
  
  <body>
  
  <div class="container bg-light">
	 
        <div class="container-foulid border-none border-success"><!---topbar--->
		
      
		  <div class="col-sm-12 pt-4">
		  	 <h1><a href="index.php" class="text-success text-decoration-none border-none">PHERMACY STOCK MANAGEMENT SYSTEM</a></h1>	  
		 
		  <?php
	if(isset($_POST['user_email'])){
	
	$user_email =     $_POST['user_email'];
	$user_password =     $_POST['user_password'];
     
	
	
    $sql = "select * from users where  user_email ='$user_email' and  user_password='$user_password' "; 
	  
	  $query = $conn->query($sql);
	  
	 if(mysqli_num_rows($query) > 0)
	    {
	     
         $data = mysqli_fetch_array($query);
         		 
			$user_first_name =     $data['user_first_name'];
			$user_last_name =     $_POST['user_last_name'];
			
			$_SESSION['user_first_name'] = $user_first_name;
			$_SESSION['user_last_name'] = $user_last_name;
			
		header('location:index.php');
		
	    }
	else {
		echo 'Data not ok';
	    }
	
	}
	

	?>
	
 
	
     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">  

		  
		     user's email: <br>
		  <input type="email" name="user_email"><br><br>
		     user's password: <br>
		  <input type="password" name="user_password"><br><br>
		  
          <input type="submit" value="Login" class="btn btn-success border-success">
		  
	 </form>
		 
		 
		 </div>
     </div><!---@end topbar--->	
  </div>
   
  </body>


</html>