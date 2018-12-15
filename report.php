<?php
include('head.php');
$name = $_SESSION['user'] ;
$newname2 = "";
	  if (isset($_POST['report'])) {
    $name2 = $_POST['name'];
    $type = $_POST['type'];
    $state = $_POST['state'];
    $description = $_POST['description'];
    $location = $_POST['location'];
        // Count # of uploaded files in array
$total = count($_FILES['file']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {
$name = $_FILES['file']['name'][$i];
$ext = end((explode('.', $name)));
$ext1= ".".$ext;
  //Get the temp file path
  $tmpFilePath = $_FILES['file']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "file/" . $newname = date('YmdHis',time()).mt_rand().$ext1;

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
       $newname2 = $newname2."##".$newname;
    
    }
  }
}
  $sql = "INSERT INTO `disease` (`id`, `name`, `description`, `location`, `type`, `image`, `state`, `prevention`) VALUES (NULL, '$name2', '$description', '$location', '$type', '$newname2', '$state', 'Sorry, No Preventive Measure or Control Action Yet!');";
if(mysqli_query($conn,$sql)){
            $message = "Disease Outbreak was Added Successfully!";
    }else{
        $error = "Disease Outbreak was not Added Successfully!";
    }
if (isset($message)) {
    echo "<script>alert('".$message."');</script>";
}elseif (isset($error)) {
    echo "<script>alert('".$error."');</script>";
}
   }


?>
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3 class="title1">Report A New<span> Disease Outbreak</span></h3>
			<div class="contact-info">
				<div class="col-md-8 contact-grids">
					<h5>Reporting a new Disease outbreak is as easy as a click.</h5>
						

						<?php
							if (isset($_SESSION['user'])) {
							
						?>	
					<div class="form-group">
						<h3 class="title1">Report a New Disease</h3>
						<form action="" method="POST"  multipart="" enctype="multipart/form-data">
							<p>&nbsp;</p>
							<input type="text" class="form-control" placeholder="Title of Disease" name="name" required="">
							<p>&nbsp;</p>
							<select class="form-control" name="type" required="">
								<option value="" disabled selected>Select Disease Type</option>
								<option value="Endermic">Endermic</option>
								<option value="Epidermic">Epidermic</option>
								<option value="Pandemic">Pandemic</option>
							</select>
							<p>&nbsp;</p>
							<select class="form-control" name="state" required="">
								<option value="">Select State</option>
								<option value="Abia">Abia</option>
								<option value="Adamawa">Adamawa</option>
								<option value="Akwa Ibom">Akwa Ibom</option>
								<option value="Anambra">Anambra</option>
								<option value="Bauchi">Bauchi</option>
								<option value="Bayelsa">Bayelsa</option>
								<option value="Benue">Benue</option>
								<option value="Borno">Borno</option>
								<option value="Cross River">Cross River</option>
								<option value="Delta">Delta</option>
								<option value="Ebonyi">Ebonyi</option>
								<option value="Enugu">Enugu</option>
								<option value="Edo">Edo</option>
								<option value="Ekiti">Ekiti</option>
								<option value="Gombe">Gombe</option>
								<option value="Imo">Imo</option>
								<option value="Jigawa">Jigawa</option>
								<option value="Kaduna">Kaduna</option>
								<option value="Kano">Kano</option>
								<option value="Katsina">Katsina</option>
								<option value="Kebbi">Kebbi</option>
								<option value="Kogi">Kogi</option>
								<option value="Kwara">Kwara</option>
								<option value="Lagos">Lagos</option>
								<option value="Nasarawa">Nasarawa</option>
								<option value="Niger">Niger</option>
								<option value="Ogun">Ogun</option>
								<option value="Ondo">Ondo</option>
								<option value="Osun">Osun</option>
								<option value="Oyo">Oyo</option>
								<option value="Plateau">Plateau</option>
								<option value="Rivers">Rivers</option>
								<option value="Sokoto">Sokoto</option>
								<option value="Taraba">Taraba</option>
								<option value="Yobe">Yobe</option>
								<option value="Zamfara">Zamfara</option>
								<option value="Abuja">Federal Capital Territory (FCT) </option>
							</select>
							<p>&nbsp;</p>
							<input type="text" class="form-control"  placeholder="City or District" name="location" required="">
							<p>&nbsp;</p>
							<textarea class="form-control" name="description" placeholder="Description of Disease Outbreak" rows="6"></textarea>					
							<p>&nbsp;</p>
							<input class="form-control" type="file" name="file[]" id="file[]" multiple>
							<p>&nbsp;</p>
							<input class="form-control btb btn-primary"  type="submit" name ="report" value="REPORT">
						</form>
					</div>

					<?php
				}else{
					echo "<p>&nbsp;</p><center><h2 style='color: red'>Sorry, You have to be logged in first!</h2></center>";
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