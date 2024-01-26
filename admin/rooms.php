<?php 

include '../database.php';
include 'header.php' ; 
include 'aside.php' ; 


?>

<div class="page-wrapper">
<div class="rooms-data">
<table>
		 
		 <thead>
		  <tr><th>Id</th><th>Image</th><th>Title</th><th>Room Type</th><th>Room Capacity</th><th>Regular Price</th><th>Sale Price</th><th>Edit</th> </tr>
		 </thead>
		 
		 <tbody>
<?php 


	
	$sql = mysqli_query($con, "Select * from room ");
	while($res = mysqli_fetch_array($sql)){
		$id = $res["id"];
		$image = $res["room_image"];
		$imageUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hotel/admin/assets/images/" . $image;
		$title = $res ['room_title'];
		$type = $res ['room_type'];
		$capacity = $res ['room_capacity'];
		$r_prc = $res ['regular_prc'];
		$s_prc = $res ['sale_prc'];
		?>
		
		<tr><td><?php echo  $id ; ?></td><td><img src="<?php echo $imageUrl ; ?>" alt="Room Image"></td><td><?php echo $title ; ?></td><td><?php echo $type ; ?></td><td><?php echo $capacity ; ?></td><td><?php echo $r_prc ; ?></td><td><?php echo $s_prc ; ?></td><td><a href="edit-room.php?id=<?php echo $id; ?>">Edit</a></td></tr>
		
		<?php
		
		
	}
	

?>
 </tbody>
		 
		 </table>

</div>
</div>

<?php include 'footer.php' ;?>
