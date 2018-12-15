<?php
ob_start();
session_start();
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'disease';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


if (isset($_POST['submit'])) {
  $email = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM `users` WHERE `username` = '$email' AND `password` = '$password';";
    $query=mysqli_query($conn,$sql);
     $numrow=mysqli_num_rows($query);
     if ($numrow > 0) {
       $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $id=$result['id'];
      $name=$result['name'];
      $role=$result['role'];
      $_SESSION['user'] = $name;
      $_SESSION['id'] = $id;
      $_SESSION['role'] = $role;
       header('Location: index.php');
     }else{
      $error = "Sorry! User Does Not Exist...";
     }
}



?>
<!DOCTYPE html>
<html>
<head>
<title>DISEASE OUTBREAK SYSTEM</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="We Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>
<body>
	<!--header-->
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1><a href="index.php"><img src="images/logo.png" alt="">CDC</a></h1>
				</div>
				<!--navigation-->
				<div class="header-text navbar-left">
					<p>Center For <br>Disease Control <br>and Prevention<p>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-right">
					<div class="top-nav-text">
						<ul>
							<form action="" method="POST">
							<li><input type="text" class="form-control" name="username" placeholder="Username" required></li>
							<li><input type="password" class="form-control" name="password" placeholder="Password" required=""></li>
							<li><input type="submit" name="submit" class="btn btn-primary" value="LOGIN"></li>
							</form>
							<?php
							if (isset($_SESSION['user'])){
							echo'<p>&nbsp;</p><h3>Welcome: '.$_SESSION['user'].' <li><a href="logout.php"><button name="" class="btn btn-info" value="">LOGOUT</button></a></li></h3>';
							}else{
							echo'	<p>&nbsp;</p><li><a href="register.php"><button name="" class="btn btn-info" value="">REGISTER</button></a></li0>';
							}
							?>
						</ul>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<ul class="nav navbar-nav navbar-left">
							<li><a href="../index.php" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
							<li><a href="../about.php" class="link link--yaku"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span></a></li>
							
							<li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>D</span><span>I</span><span>S</span><span>E</span><span>A</span><span>S</span><span>E</span> <span>O</span><span>U</span><span>T</span><span>B</span><span>R</span><span>E</span><span>A</span><span>K</span><span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="../report.php">Report Disease</a></li>
									<li><a class="hvr-bounce-to-bottom" href="../view.php">View Disease Outbreaks</a></li>     
								</ul>
							</li>
							<li><a href="../contact.php" class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
						</ul>		
						<div class="clearfix"> </div>
					</div><!--//navigation-->
				</div>
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
	<!--//header-->
	