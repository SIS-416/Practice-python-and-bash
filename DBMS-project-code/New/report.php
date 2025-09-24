<?php
    require('connection.php');

    
  session_start();
   
	$user_first_name =  $_SESSION['user_first_name'];
    $user_last_name =  $_SESSION['user_last_name'];

  if(!empty($user_first_name)){
	
     
	  $sql1 = "select * from product";
	  $query1 = $conn->query($sql1);
	  
	  $data_list = array();
	  
	while($data1 =  mysqli_fetch_array($query1)){
       $medicine_id       = $data1['medicine_id'];
	     $medicine_name  = $data1['medicine_name'];
		 
		 $data_list[$medicine_id] = $medicine_name;
	}
 
?>

<!DOCTYPE>
<html>

  <head>
  <title> Report </title>
  
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

	?>

     <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="GET">  
	 
	   
		  Select Medicine Name:
		 <select name="medicine_name">
    <?php
	

		   $sql = "select * from product";
	  $query = $conn->query($sql);
	  
	 
	  
	 while($data = mysqli_fetch_assoc($query)){
	  $medicine_id       = $data['medicine_id'];
	  $medicine_name     = $data['medicine_name'];
	  
	  

	     
	 ?>
	 
		
		 <option value="<?php echo $medicine_id ?> "><?php echo  $medicine_name ?> </option>
	 <?php } ?>
		 </select>
		  
		  
		  
          <input type="submit" value="Generate Report">
		  <h1>Store Medicine</h1>
	 </form>
	 <?php 
	 
	 if(isset($_GET['medicine_name'])){
		  $medicine_name = $_GET['medicine_name'];
		 
		$sql2 ="select * from store_medicine where store_medicine_name=$medicine_name";
		 
		 $query2 = $conn->query($sql2);
		 
		while($data2 = mysqli_fetch_array($query2)){
		 
		      $store_medicine_quantity  =$data2['store_medicine_quantity'];
			  $store_medicine_name  =$data2['store_medicine_name'];
			  $store_medicine_entrydate  =$data2['store_medicine_entrydate'];
			  
			  echo "<h2>$data_list[$store_medicine_name]</h2>";
			  echo "<table class='table table-success table-hover table-striped'><tr><td>Store date</td><td>Amount</td></tr>";
			  echo "<tr><td>$store_medicine_entrydate</td><td>$store_medicine_quantity</td></tr>";
			  echo "</table>";
	      }
	 }
	 
	 ?>
	 <h1>Spend Medicine</h1>
	 <?php
	  if(isset($_GET['medicine_name'])){
		  $medicine_name = $_GET['medicine_name'];
		 
		$sql3 ="select * from  spend_medicine where spend_medicine_name=$medicine_name";
		 
		 $query3 = $conn->query($sql3);
		 
		while($data3 = mysqli_fetch_array($query3)){
		 
		      $spend_medicine_quantity  =$data3['spend_medicine_quantity'];
			  $spend_medicine_name  =$data3['spend_medicine_name'];
			  $spend_medicine_entrydate  =$data3['spend_medicine_entrydate'];
			  
			  echo "<h2>$data_list[$spend_medicine_name]</h2>";
			  echo "<table class='table table-success table-hover table-striped'><tr><td>Spend date</td><td>Amount</td></tr>";
			  echo "<tr><td>$spend_medicine_entrydate</td><td>$spend_medicine_quantity</td></tr>";
			  echo "</table>";
	      }
	 }
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