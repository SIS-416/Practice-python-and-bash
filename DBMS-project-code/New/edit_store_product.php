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
  <title>Edit Store Medicine</title>
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
	
		 if(isset($_GET['id'])){
		$getid = $_GET['id'];
		 
		 $sql = "select * from store_medicine where store_medicine_id = $getid";
			$query = $conn->query($sql);
			$data = mysqli_fetch_assoc($query);
			
			$store_medicine_id  = $data['store_medicine_id'];
			$store_medicine_name = $data['store_medicine_name'];
			$store_medicine_quantity = $data['store_medicine_quantity'];
			$store_medicine_entrydate = $data['store_medicine_entrydate'];
		  
	 } 
	  if(isset($_GET['store_medicine_name'])){
		 
		     $new_store_medicine_name    = $_GET['store_medicine_name'];
			$new_store_medicine_quantity      = $_GET['store_medicine_quantity'];
			$new_store_medicine_entrydate  = $_GET['store_medicine_entrydate'];
			  $store_store_medicine_id= $_GET['store_medicine_id'];
			
			$sql1 = "update store_medicine set store_medicine_name ='$new_store_medicine_name',
			
			store_medicine_quantity='$new_store_medicine_quantity', store_medicine_entrydate='$new_store_medicine_entrydate'
			
			where store_medicine_id= $store_store_medicine_id";
			
			#$query1 = $conn->query($sql1);
			
			if($conn-> query($sql1) == TRUE){
			echo 'upddate successfully';			
		}
		else{
			echo  "Error creating database: " . $conn->error;
		}		 
	 }
	

	?>
	
 
	
     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="GET">  

		  	medicine : <br>
			<select name ="store_medicine_name">
			<?php			
			  
			 	   $sql2 = "SELECT * FROM product";
	  $query1 = $conn->query($sql2);
		  
	   while($data1 = mysqli_fetch_array($query1)){
		   
	             $data_id = $data1['medicine_id'];
	             $data_name = $data1['medicine_name'];
				 
			?>	
				"<option value ='<?php echo $data_id ?>' <?php if($data_id ==$store_medicine_name) {echo 'selected';}?>> 
				
				<?php echo $data_name ?>
				</option>";
				
			<?php
			
			     } 
			?>		
			
			</select><br><br>
			
		   medicine quantity: <br>
		  <input type="number" name="store_medicine_quantity" value ="<?php echo $store_medicine_quantity ?>"><br><br>
		  
		    medicine entry date: <br>
		  <input type="date" name="store_medicine_entrydate" value ="<?php echo $store_medicine_entrydate ?>"><br><br>
		  
		   <input type="text" name="store_medicine_id" value ="<?php echo $store_medicine_id?>" hidden>
		   
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