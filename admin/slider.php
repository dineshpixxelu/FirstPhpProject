<?php 

include '../database.php';
include 'header.php' ; 
include 'aside.php' ; 



?>

<div class="page-wrapper">
       
	   <div class="Slider">
	   
	     <table>
		 
		 <thead>
		  <tr><th>Id</th><th>Title</th><th>Description</th><th>Image</th><th>Edit</th></tr>
		 </thead>
		 
		 <tbody>
		 <?php 
		    $sql = mysqli_query($con, "Select * from slider");
			//echo "<pre"; print_r($sql);
			//exit;
			while($res = mysqli_fetch_array($sql)){
			 $id = $res["id"];
			 $title = $res["title"];
			 $description = $res["description"];
			 $image = $res["image"];
			 $imageUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hotel/admin/assets/images/" . $image;  
			 ?>
			 <tr><td><?php echo $id ; ?></td><td><?php echo $title ?></td><td><?php echo $description ?></td><td><img src="<?php echo $imageUrl ; ?>" alt="Slider Image"></td><td><a href="edit-slide.php?id=<?php echo $id; ?> ">Edit</a></td></tr>
			 
			 <?php 
			}
	   
		?>    
		 
		 </tbody>
		 
		 </table>
	   
	   </div>
	   
</div>			
					
<?php 

include 'footer.php' ; 




?>		