<?php
include('head.php');
?>
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<!--Shortcodes-page -->
	<div class="codes">
		<div class="container">
			<h3 class="title1">Disease <span>Outbreak</span></h3>
			
			<?php
		if (isset($_GET['disease'])) {
			$disease = $_GET['disease'];
				 $sql = "SELECT * FROM `disease` WHERE `id` = '$disease';";
				    $query=mysqli_query($conn,$sql);
				     $numrow=mysqli_num_rows($query);
				     if ($numrow > 0) {
				       $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
				      $title=$result['name'];
				      $state=$result['state'];
				      $location=$result['location'];
				      $description=$result['description'];
				      $prevention=$result['prevention'];
				      $type=$result['type'];
				      $image=$result['image'];
		}

			?>


			<div class="grid_3 grid_4">
			<row>
			<div class="col-lg-8 in-gp-tl">
				<h3 class="hdg">Disease: <?php echo $title; ?></h3>
				<p>&nbsp;</p>
				<h3 class="hdg">Type: <?php echo $type; ?></h3>
				<p>&nbsp;</p>
				<h3 class="hdg">Region: <?php echo $state; ?></h3>
				<p>&nbsp;</p>
				<h3 class="hdg">City: <?php echo $location; ?></h3>
				<p>&nbsp;</p>
				
				</div>
				<div class="col-lg-4 in-gp-tl">
				<img src="images/<?php echo substr($image, 2); ?>" width="100%">
				</div>
				
				<div class="col-lg-12 in-gp-tl">
				<p>&nbsp;</p>
				<h3 class="hdg">Description:</h3>
				<div class="well">
					<?php echo $description; ?>
				</div>

				<p>&nbsp;</p>
				<h3 class="hdg">Prevention:</h3>
				<p>&nbsp;</p>

				<div class="well">
					<?php echo $prevention; ?>
				</div>
				</div>
				</row>

			</div>
			
		
			
	
		</div>
	</div>
	<!--//short-codes-->		
<?php
}
include('foot.php');
?>