<?php
  require('connection.php');
  
   $sql1 = "select * from product";
	  $query1 = $conn->query($sql1);
	  
	  $data_list = array();
	  
	while($data1 =  mysqli_fetch_array($query1)){
       $medicine_id       = $data1['medicine_id'];
	     $medicine_name  = $data1['medicine_name'];
		 
		 $data_list[$medicine_id] = $medicine_name;
	}

       session_start();
   
	$user_first_name =  $_SESSION['user_first_name'];
    $user_last_name =  $_SESSION['user_last_name'];

  if(!empty($user_first_name)){

?>

<!DOCTYPE>
<html>
  <head>
  <title>List of Spend Medicine</title>
  
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
            <div class="container p-3 m-3">			  
    
    <?php
     $sql = "select * from  spend_medicine";
	  $query = $conn->query($sql);
	  
	  echo "<table class='table table-success table-hover table-striped'><tr><th>medicine Name</th><th>Quantity</th><th>Entry_Date</th><th>Action</th></tr>";
	  
	 while($data = mysqli_fetch_assoc($query)){
	  $spend_medicine_id         = $data['spend_medicine_id'];
	  $spend_medicine_name     = $data['spend_medicine_name'];
	  $spend_medicine_quantity = $data['spend_medicine_quantity'];
	    $spend_medicine_entrydate   = $data['spend_medicine_entrydate'];
	  

	  echo "<tr>
	  
	 	  <td>$data_list[$spend_medicine_name]</td>
	   <td>$spend_medicine_quantity</td>

	   <td>$spend_medicine_entrydate</td>
	  <td><a href = 'edit_spend_product.php?id= $spend_medicine_id'>Edit</a></td>
	  
	  
	  </tr> ";
	  
	  
	  
	 } 
	 echo "</table>";
	?>
 
				
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