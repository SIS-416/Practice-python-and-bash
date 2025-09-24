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
  <title>List of Catagory</title>
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
				
				$sql="select * from catagory";
				$query = $conn->query($sql);
				
				echo "<table class='table table-success table-hover table-striped'><tr><th>Category</th><th>Date</th><th>Action</th></tr>";
				
				while($data = mysqli_fetch_array($query)){
					
					$catagory_id  = $data['catagory_id'];
					$catagory_name = $data['catagory_name'];
	                $catagory_entrydate = $data['catagory_entrydate'];
					 
					 echo "<tr>
					 
					 <td>$catagory_name</td>
					  <td>$catagory_entrydate</td>
					  <td><a href='edit_catagory.php?id=$catagory_id' class='btn btn-success'>Edit</a></td>
					  <td><a href='#' class='btn btn-danger'>Delete</a></td>
					 </tr>";
					 
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