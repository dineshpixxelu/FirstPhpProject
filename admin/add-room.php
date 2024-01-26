<?php 

include '../database.php';
include 'header.php' ; 
include 'aside.php' ; 
if(isset($_POST['submit'])){
	extract($_POST);
	$image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $folder = "assets/images/".$image;
    move_uploaded_file($tempname, $folder);
	$sql = "INSERT into room(room_image, room_title, room_type, room_capacity, regular_prc, sale_prc) Values('$image','$title','$r_type','$capacity', '$r_price', '$s_price')";
	$result = $con->query($sql);
	if($result){
		echo "Insert successfully";
	}else{
	  echo "failed to insert";	
		
	}
	
	
}


?>

<div class="page-wrapper">
       <form class="sld-form" method="POST" action="" enctype="multipart/form-data">
	   <div class="field-group">
		     <label>Room Image</label>
			 <input type="file" name="image" >
		 </div>
	     <div class="field-group">
		     <label>Room Title</label>
			 <input type="text" name="title" >
		 </div>
	     <div class="field-group">
		     <label>Room Type</label>
			 <input type="text" name="r_type" >
		 </div>
		 <div class="field-group">
		     <label>Room Capacity</label>
			 <input type="text" name="capacity" >
		 </div>
		 <div class="field-group">
		     <label>Regular Price</label>
			 <input type="text" name="r_price" >
		 </div>
		 <div class="field-group">
		     <label>Sale Price</label>
			 <input type="text" name="s_price" >
		 </div>
		 
		 
		 <div class="field-group">
			 <input type="submit" name="submit"  value="Add Room">
		 </div>
	   
	   </form>
		</div>			
					
<?php 

include 'footer.php' ; 




?>					