<?php 

include 'database.php';
?>
<div class="slider-mn sld slider">

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
			 
			 
			 <div class="slide" style="background:url('<?php echo $imageUrl ; ?> ')">
			    <h3><?php echo $title ?></h3>
				<p><?php echo $description ?></p>
			 </div>
			
			 
			 <?php 
			}
	   
		?>  
		
		</div>
		
		
		
	<script>
        $(document).ready(function () {
			
			
			$(".sld").slick({
				dots: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1, 
				prevArrow: '<i class="icon-arrow-left flex-prev"></i>',
				nextArrow: '<i class="icon-arrow-right flex-prev"></i>'
			  });
                  
               
            });
        
    </script> 
	