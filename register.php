<?php
include('head.php');
if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "INSERT INTO `disease`.`users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES (NULL, '$name', '$username', '$email', '$password', 'User');";
if(mysqli_query($conn,$sql)){
            $message = "Registration Successful!";
    }else{
        $error = "Registration not Successful, try again later!";
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
			<h3 class="title1">Register <span>An Account</span></h3>
			<div class="contact-info">
				<div class="col-md-8 contact-grids">
					<h5>You have to be registered to recieve disease updates and report new outbreaks.</h5>
							
					<div class="form-group">
						<h3 class="title1">Register Here</h3>
						<form action="" method="POST">
							<p>&nbsp;</p>
							<input type="text" class="form-control" placeholder="Name" name="name" required="">
							<p>&nbsp;</p>
							<input type="text"  class="form-control" placeholder="Username" name="username"  required="">
							<p>&nbsp;</p>
							<input type="email" class="form-control"  placeholder="Email" name="email" required="">
							<p>&nbsp;</p>
							<input type="password"  class="form-control" placeholder="Password" name="password" required="">
							<p>&nbsp;</p>
							<input type="submit" name ="register" value="REGISTER">
						</form>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!--//contact-->
<?php
include('foot.php');
?>