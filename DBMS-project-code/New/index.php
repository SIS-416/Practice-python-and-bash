<?php
  
    session_start();
   
	$user_first_name =  $_SESSION['user_first_name'];
    $user_last_name =  $_SESSION['user_last_name'];

  if(!empty($user_first_name)){
?>

<!DOCTYPE>
<html>

  <head>
  <title>PHERMACY STOCK MANAGEMENT SYSTEM</title>
  
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
               <div class="row pt-3">
			      <div class="col-sm-3">
			   <a href="add_catagory.php"><i class="fas fa-folder-plus fa-5x text-success"></i></a>
			   <p>Add Category</p>
               </div>
			   <div class="col-sm-3">
			    <a href="list_of_catagory.php"><i class="fas fa-folder-open fa-5x text-success"></i></a>
				 <p>List of Category</p>
               </div>
			   <div class="col-sm-3">
			   <a href="add_product.php"><i class="fas fa-plus-circle fa-5x text-success"></i></a>
				 <p>Add Medicine</p>
               </div>
			   <div class="col-sm-3">
			 <a href="list_of_product.php"><i class="fas fa-stream fa-5x text-success"></i></a>
				 <p>List of Medicine</p>
               </div>
               </div>
               </hr>
			   <div class="row pt-3">
			      <div class="col-sm-3">
			   <a href="add_store_product.php"><i class="fas fa-box fa-5x text-success"></i></a>
			   <p>Add Store Medicine</p>
               </div>
			   <div class="col-sm-3">
			    <a href="list_of_entry_product.php"><i class="fas fa-folder-open fa-5x text-success"></i></a>
				 <p>List of Store Medicine</p>
               </div>
			   <div class="col-sm-3">
			   <a href="add_spend_product.php"><i class="fas fa-window-restore fa-5x text-success"></i></a>
				 <p>Add Spend Medicine</p>
               </div>
			   <div class="col-sm-3">
			 <a href="list_of_spend_product.php"><i class="fas fa-stream fa-5x text-success"></i></a>
				 <p>List of Spend Medicine</p>
               </div>
               </div>
			    </hr>
			   <div class="row pt-3">
			      <div class="col-sm-3">
			   <a href="report.php"><i class="fa-sharp fa-light fa-print fa-5x text-success"></i></i></a>
			   <p>Report</p>
               </div>
			   <div class="col-sm-3">
			   
               </div>
			   <div class="col-sm-3">
			   
               </div>
			   <div class="col-sm-3">
			   
               </div>
               </div>
			     </hr>
			   <div class="row pt-3">
			      <div class="col-sm-3">
			   <a href="add_users.php"><i class="fas fa-user-plus fa-5x text-success"></i></i></a>
			   <p>Add User's</p>
               </div>
			   <div class="col-sm-3">
			   <a href="list_of_users.php"><i class="fas fa-users fa-5x text-success"></i></i></a>
			   <p>List of User's</p>
               </div>
			   <div class="col-sm-3">
			   
               </div>
			   <div class="col-sm-3">
			   
               </div>
               </div>
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