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
  <title> Add Product</title>
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
	
	if(isset($_GET['medicine_name'])){
		
	$medicine_name =     $_GET['medicine_name'];
	$medicine_catagory = $_GET['medicine_catagory'];
	$medicine_brand =     $_GET['medicine_brand'];	
  $medicine_mfg_date = $_GET['medicine_mfg_date'];
	$medicine_exp_date = $_GET['medicine_exp_date'];
	
	
	
	
	$sql1 = "INSERT INTO  product(medicine_name ,medicine_catagory,
	
                 	medicine_brand, medicine_mfg_date, medicine_exp_date) 
					
	        VALUES ('$medicine_name', '$medicine_catagory', '$medicine_brand', '$medicine_mfg_date', '$medicine_exp_date')";
		   
	if($conn->query($sql1) == True)
	{
		echo 'Data inserted';
	}else {
		echo 'Data not inserted';
	}
	
	}

	?>
	
	<?php
	
	   $sql2 = "SELECT * FROM catagory";
	  $query1 = $conn->query($sql2);
	
	?>
	
     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="GET">  
        	medicine: <br>
		  <input type="text" name="medicine_name"><br><br>
		  	medicine catagory: <br>
			<select name = "medicine_catagory">
			<?php			
			 while( $data1 = mysqli_fetch_array($query1 )){
	             $catagory_id = $data1['catagory_id'];
	             $catagory_name = $data1['catagory_name'];
				echo "<option value ='$catagory_id'>$catagory_name</option>";
			 }
			?>		
			
			</select><br><br>			
		  	medicine Brande: <br>
		  <input type="text" name="medicine_brand"><br><br>		  
		   medicine mfg date: <br>
		  <input type="text" name="medicine_mfg_date"><br><br>		
		    medicine expairy date: <br>
		  <input type="text" name="medicine_exp_date"><br><br>
		  
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