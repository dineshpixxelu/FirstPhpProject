<?php 

include '../database.php';
include 'header.php' ; 
include 'aside.php' ; 
if(isset($_GET['id'])){
	//echo "here".$_GET['id'];
	 $sql = mysqli_query($con, "Select * from room where id=" . $_GET['id']);
	//$result = $con->query($sql);
	while($res = mysqli_fetch_array($sql)){
		//$image = $res['room_image'];
		$id = $res["id"];
		$image = $res["room_image"];
		$imageUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hotel/admin/assets/images/" . $image;
		$title = $res['room_title'];
		$type = $res['room_type'];
		$capacity = $res['room_capacity'];
		$r_prc = $res['regular_prc'];
		$s_prc = $res['sale_prc'];
		
		
		
	}
}
if(isset($_POST['submit'])){
	extract($_POST);
	$image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $id = $_POST['room_id'];
    $folder = "assets/images/".$image;
    move_uploaded_file($tempname, $folder);
    //$sql = "Update room set (room_image, room_title, room_type, room_capacity, regular_prc, sale_prc) Values('$image','$title','$r_type','$capacity', '$r_price', '$s_price')";
	$sql = "UPDATE room SET room_image='$image', room_title='$title', room_type='$r_type', room_capacity='$capacity', regular_prc='$r_price', sale_prc='$s_price' WHERE id='$id'" ;
		$res = mysqli_query($con, $sql);
		if($res){
			echo "Data Updated Successfully";
		}else{
			echo "Failed to insert";
		}
	} 


?>

<div class="page-wrapper">
       <form class="sld-form" method="POST" action="" enctype="multipart/form-data">
	   <div class="field-group">
		     <label>Room Image</label>
			 <input type="file" name="image" value="<?php echo $image; ?>"  >
		 </div>
	     <div class="field-group">
		     <label>Room Title</label>
			 <input type="text" name="title"  value="<?php echo $title; ?>">
		 </div>
	     <div class="field-group">
		     <label>Room Type</label>
			 <input type="text" name="r_type" value="<?php echo $type; ?>" >
		 </div>
		 <div class="field-group">
		     <label>Room Capacity</label>
			 <input type="text" name="capacity" value="<?php echo $capacity; ?>" >
		 </div>
		 <div class="field-group">
		     <label>Regular Price</label>
			 <input type="text" name="r_price" value="<?php echo $r_prc; ?>" >
		 </div>
		 <div class="field-group">
		     <label>Sale Price</label>
			 <input type="text" name="s_price" value="<?php echo $s_prc; ?>" >
		 </div>
		 
		 
		 <div class="field-group">
		     <input type="hidden" name="room_id" value="<?php echo $id; ?>" >
			 <input type="submit" name="submit"  value="Update Room">
		 </div>
	   
	   </form>
		</div>			
					
<?php 

include 'footer.php' ; 




?>					