<?php
include('head.php');
$update = "";
$name = $_SESSION['user'] ;
$newname2 = "";
	  if (isset($_POST['submitprevention'])) {
$id = $_POST['id'];
$prevention = $_POST['prevention'];

	$sql = "UPDATE `disease` SET `prevention` = '$prevention' WHERE `disease`.`id` = '$id';";
  	
  $query=mysqli_query($conn,$sql);
   }



if(isset($_POST['submitgo'])){
	$update = $_POST['updatedis'];
}

?>
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3 class="title1">Set Control Actions to<span> Disease Outbreak</span></h3>
			<div class="contact-info">
				<div class="col-md-8 contact-grids">
						

					<?php
					$sql = "SELECT * FROM `disease`;";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $id=$result['id'];
							      $title=$result['name'];
							       while ($result=mysqli_fetch_array($query)) {
							               $id=$id."||".$result['id'];
							               $title=$title."||".$result['name'];
							              
							             }
							                      $id2=explode("||", $id);
							                      $title2=explode("||", $title);
							                      $allow = "yes";
							                      $px=count($id2);
							                    } 
							                   

					?>
					<form action="" method="POST">
					<div class="col-lg-12 in-gp-tb">
					<div class="input-group">
						<select class="form-control" name="updatedis" required="">
							<option value="">Select Disease Below</option>
							<?php
							 for ($i=0; $i < $px; $i++) { 
							                    	$a = $i +  1;
							    echo "<option value='".$id2[$i]."'>".$title2[$i]."</option>";
							}
							?>
						</select>
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit" name="submitgo">Go!</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				</form>

					<?php


					?>





						<?php
							if ($update != "") {
							$sql = "SELECT * FROM `disease` WHERE `id` = '$update';";
							    $query=mysqli_query($conn,$sql);
							     $numrow=mysqli_num_rows($query);
							      if($numrow>0){
							      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
							      $id=$result['id'];
							      $title=$result['name'];
							      $description=$result['description'];
							      $state=$result['state'];
							  }
						?>	
					<div class="form-group">
						<h3 class="title1">Update Disease With Prevention and Control Measures</h3>
						<form action="" method="POST"  multipart="" enctype="multipart/form-data">
							<p>&nbsp;</p>
							<h3>Title of Disease:</h3>
							<input type="text" class="form-control" placeholder="Name" name="title" required="" readonly="" value="<?php echo $title; ?>">
							<p>&nbsp;</p>
							<h3>State:</h3>
							<input type="text" class="form-control" placeholder="Name" name="state" required="" readonly="" value="<?php echo $state; ?>">
							<p>&nbsp;</p>
							<h3>Description of Disease:</h3>
							<textarea class="form-control" name="description" placeholder="Description of Disease Outbreak" rows="6" readonly=""><?php echo $description; ?> </textarea>				<input type="hidden" name="id" value="<?php echo $id; ?>"></input>	
							<p>&nbsp;</p>
							<h3>Preventive Measures:</h3>
							<textarea class="form-control" name="prevention" placeholder="Prevention Actions for Disease Outbreak" rows="6" required=""> </textarea>					
							<p>&nbsp;</p>
							<input class="form-control btb btn-primary"  type="submit" name ="submitprevention" value="UPDATE DISEASE OUTBREAK">
						</form>
					</div>

					<?php
				}
					?>
				
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!--//contact-->
<?php
include('foot.php');
?>