 <?php
 function data_list($table, $column1, $column2){
		 
		    require('connection.php');
		  
		   $sql2 = "SELECT * FROM $table";
	  $query1 = $conn->query($sql2);
	  
	  
	  
	  
	  
	  
	  
	  
		  
	   while($data1 = mysqli_fetch_array($query1)){
		   
	             $data_id = $data1[$column1];
	             $data_name = $data1[$column2];
				 
				echo "<option value ='$data_id'>$data_name</option>";
			 }
			 
	  }	
?>