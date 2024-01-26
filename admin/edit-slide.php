<?php 

include '../database.php';
include 'header.php' ; 
include 'aside.php' ; 

if(isset($_GET['id'])){
	$sql = "select * from slider where id = " . $_GET['id'];
	$res = $con->query($sql);
	$slider = mysqli_fetch_assoc($res);
	$id = $slider['id'];
	$title =$slider['title'];
	$description =$slider['description'];
	$image =$slider['image'];
}


if(isset($_POST['submit'])){
	extract($_POST);
	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $folder = "assets/images/".$filename;
    move_uploaded_file($tempname, $folder);
	$sql = "Update slider SET title='$title', description='$description', image='$filename' WHERE id='$id'";
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
		     <label>Slider Title</label>
			 <input type="text" name="title" value="<?php echo $title; ?>" >
		 </div>
	     <div class="field-group">
		     <label>Slider Description</label>
			 <textarea  name="description"  value="<?php echo $description; ?>"></textarea>
		 </div>
		 <div class="field-group">
		     <label>Slider Image</label>
			 <input type="file" name="image" value="<?php echo $image; ?>" >
		 </div>
		 
		 <div class="field-group">
		    <input type="hidden" name="slide_id" value="<?php echo $id; ?>" >
			 <input type="submit" name="submit"  value="Update Slide">
		 </div>
	   
	   </form>
		</div>			
					
<?php 

include 'footer.php' ; 




?>		