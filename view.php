<?php
include('head.php');
$data = "all";

if (isset($_POST['disease'])) {
	$search = $_POST['search'];
	$data = "disease";
}

if (isset($_POST['state'])) {
	$search = $_POST['search'];
	$data = "state";
}

if (isset($_POST['hot'])) {
	$search = $_POST['search'];
	$data = "hot";
}

?>
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>

	
	<!--about-servcs-->
	<div class="about-servcs"> 
		<div class="container">
		<p>&nbsp;</p>
			<h3 CLASS="title1">DISEASE OUTBREAKS</h3>
			<h5>Monitor Disease Outbreaks in Your Area. </h5>
			<div class="servcs-info">
			<div class="col-lg-12 in-gp-tb">
			<form action="" method="POST">
					<div class="input-group">
						<input type="text" class="form-control" aria-label="..." placeholder="Search by Disease, State, Location" required="" name="search">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><input type="submit" class="btn btn-primary" name="disease" value="Search Disease" style="width: 100%"></li>
								<li><input type="submit" class="btn btn-warning" name="state" value="View Disease Outbreaks in State" style="width: 100%"></li>
								<li><input type="submit" class="btn btn-danger" name="hot" value="View Hot Zones in State" style="width: 100%"></li>
							</ul>
						</div><!-- /btn-group -->
					</div><!-- /input-group -->
					</form>
				</div><!-- /.col-lg-6 -->




				<?php
				if ($data === "all") {
					$sql = "SELECT * FROM `disease` ORDER BY RAND();";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $id=$result['id'];
							      $title=$result['name'];
							      $description=$result['description'];
							      $image=$result['image'];
							       while ($result=mysqli_fetch_array($query)) {
							               $id=$id."||".$result['id'];
							               $title=$title."||".$result['name'];
							               $description=$description."||".$result['description'];
							               $image=$image."||".$result['image'];
							              
							             }
							                      $id2=explode("||", $id);
							                      $title2=explode("||", $title);
							                      $description2=explode("||", $description);
							                      $image2=explode("||", $image);
							                      $allow = "yes";
							                      $px=count($id2);
							                    } 
							                    for ($i=0; $i < $px; $i++) { 
							                    	$a = $i +  1;
							                    
				

				?>
				<a href="view2.php?disease=<?php echo $id2[$i]; ?>">
				<div class="col-md-6 sevcs-grids">
					<h4><span><?php echo $a; ?></span><?php echo $title2[$i]; ?></h4>
					<p><?php echo substr($description2[$i], 0, 70); ?></p>
					<p>&nbsp;</p>			
				</div>
				</a>
				<?php
			}
				}

				?>











<?php
				if ($data === "disease") {
					$sql = "SELECT * FROM `disease` WHERE `name` LIKE '%$search%' or `description` LIKE '%$search%';";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $id=$result['id'];
							      $title=$result['name'];
							      $description=$result['description'];
							      $image=$result['image'];
							       while ($result=mysqli_fetch_array($query)) {
							               $id=$id."||".$result['id'];
							               $title=$title."||".$result['name'];
							               $description=$description."||".$result['description'];
							               $image=$image."||".$result['image'];
							              
							             }
							                      $id2=explode("||", $id);
							                      $title2=explode("||", $title);
							                      $description2=explode("||", $description);
							                      $image2=explode("||", $image);
							                      $allow = "yes";
							                      $px=count($id2);
							                    
							                    for ($i=0; $i < $px; $i++) { 
							                    	$a = $i +  1;
							                    
				

				?>

				<div class="col-md-6 sevcs-grids">
					<h4><span><?php echo $a; ?></span><?php echo $title2[$i]; ?></h4>
					<p><?php echo substr($description2[$i], 0, 70); ?></p>
					<p>&nbsp;</p>			
				</div>
				
				<?php
			}
				}else{
					echo "<p>&nbsp;</p><center><h2 style='color: red'>Sorry, No Diseases Match Your Search!</h2></center>";
				}

			}

				?>















				<?php
				if ($data === "state") {
					$sql = "SELECT * FROM `disease` WHERE `state` LIKE '%$search%';";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $id=$result['id'];
							      $title=$result['name'];
							      $description=$result['description'];
							      $image=$result['image'];
							       while ($result=mysqli_fetch_array($query)) {
							               $id=$id."||".$result['id'];
							               $title=$title."||".$result['name'];
							               $description=$description."||".$result['description'];
							               $image=$image."||".$result['image'];
							              
							             }
							                      $id2=explode("||", $id);
							                      $title2=explode("||", $title);
							                      $description2=explode("||", $description);
							                      $image2=explode("||", $image);
							                      $allow = "yes";
							                      $px=count($id2);
							                   
							                    for ($i=0; $i < $px; $i++) { 
							                    	$a = $i +  1;
							                    
				

				?>

				<div class="col-md-6 sevcs-grids">
					<h4><span><?php echo $a; ?></span><?php echo $title2[$i]; ?></h4>
					<p><?php echo substr($description2[$i], 0, 70); ?></p>
					<p>&nbsp;</p>			
				</div>
				
				<?php
			}
			}else{
					echo "<p>&nbsp;</p><center><h2 style='color: red'>Sorry, No Diseases Match Your Search!</h2></center>";
				}
				}

				?>
















				<?php
				if ($data === "hot") {
					$sql = "SELECT * FROM `disease` WHERE `state` LIKE '%$search%' GROUP BY `location`;";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $location=$result['location'];
							             while ($result=mysqli_fetch_array($query)) {
							               
							               $location=$location." ; ".$result['location'];
							              
							             }
							                     
							                    
				

				?>

				<div class="col-md-12 sevcs-grids">
					<h4><span>ALERT!</span>Please avoid the following location(s) in <?php echo $search; ?>. <br><?php echo $location; ?></h4>
							
				</div>
				
				<?php
			}

			else{
					echo "<p>&nbsp;</p><center><h2 style='color: red'>Sorry, No Diseases Match Your Search!</h2></center>";
				}
				
}
				?>











				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!--//about-servcs-->

	
	<p>&nbsp;</p>
<?php
include('foot.php');
?>