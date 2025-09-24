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
  <title> Edit Catagory</title>
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
			
			$sql = "select * from catagory where catagory_id = $getid";
			$query = $conn->query($sql);
			$data = mysqli_fetch_assoc($query);
			
			$catagory_id = $data['catagory_id'];
			$catagory_name = $data['catagory_name'];
			$catagory_entrydate = $data['catagory_entrydate'];

			
		}
		
		if(isset($_GET['catagory_name'])){
			$new_catagory_name = $_GET['catagory_name'];
			$new_catagory_id = $_GET['catagory_id'];
			$new_catagory_entrydate = $_GET['catagory_entrydate'];
			
		 $sql1 =	"update catagory set 
			    catagory_name = '$new_catagory_name', 
			   catagory_entrydate = '$new_catagory_entrydate' where catagory_id = '$new_catagory_id' ";

			
		if($conn-> query($sql1) == TRUE){
			echo 'upddate successfully';
			
		}
		else{
			echo 'not update';
		}
			
		}
	
	
	
	?>
     <form action="edit_catagory.php" method="GET">  
          Catagory: <br>
		  <input type="text" name="catagory_name" value ="<?php echo $catagory_name ?>"<br><br>
		  Catagory Entry Date: <br>
		  <input type="date" name="catagory_entrydate" value ="<?php echo $catagory_entrydate ?>"<br><br>
		  
<input type="text" name="catagory_id" value = "<?php echo $catagory_id ?>" hidden><br>

          <input type="submit" value="update">
		  
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