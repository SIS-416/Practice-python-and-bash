<?php
    require('connection.php');

    
  session_start();
   
	$user_first_name =  $_SESSION['user_first_name'];
    $user_last_name =  $_SESSION['user_last_name'];

  if(!empty($user_first_name)){
	

 
?>

<!DOCTYPE>
<html>

  <head>
  <title> Add Users</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  
  
  </head>
  
  <body>
  
   <div class="container bg-light">
	 
        <div class="container-foulid border-bottom border-success"><!---topbar--->
        <?php include('topber.php'); ?> 
     </div><!---@end topbar--->	
     <div class="container-foulid">
	     
		   <div class="row">
	          <div class="col-sm-3 bg-light p-0 m-0"><!--@left ber--->	 
			  <?php include('leftber.php'); ?>
				   
	         </div><!--@end of left--->
	          <div class="col-sm-9 border-start border-dark"><!--@right ber--->
            <div class="container p-4 m-4">			  
      <?php
	
	if(isset($_GET['user_first_name'])){
		
	$user_first_name =     $_GET['user_first_name'];
	$user_last_name = $_GET['user_last_name'];
	$user_email =     $_GET['user_email'];
	$user_password =     $_GET['user_password'];
     
	
	
	
	
	$sql1 = "INSERT INTO   users(user_first_name, user_last_name,
	
                 	user_email,user_password) 
					
	        VALUES ('$user_first_name', '$user_last_name', '$user_email', '$user_password')";
		   
	if($conn->query($sql1) == True)
	{
		echo 'Data inserted';
	}else {
		echo 'Data not inserted';
	}
	
	}

	?>
	
 
	
     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="GET">  

		  
		   user's first name: <br>
		  <input type="text" name="user_first_name"><br><br>		
		    user's last name: <br>
		  <input type="text" name="user_last_name"><br><br>
		     user's email: <br>
		  <input type="email" name="user_email"><br><br>
		     user's password: <br>
		  <input type="password" name="user_password"><br><br>
		  
          <input type="submit" value="submit">
		  
	 </form>
			   
	 </div><!--@end of container--->	
	         </div><!--@end of right--->	 
	     </div><!--@end of row--->	 
	 </div>
      <div class="container-foulid border-top border-success">
	   <?php include('bottomber.php'); ?> 
	 </div> 
     </div><!--@end of container--->
  
  
  </body>


</html>
<?php
  }else{
	  header('location:login.php');
	  
	  
  }
  ?>