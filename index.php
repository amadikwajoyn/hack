<?php
include('head.php');
?>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-info">
								<h2>Joint Institute for disease Control</h2>
								<p>Always there to cater for health related Emergencies. </p>								
								<a href="#" class="effect6">Get More</a>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h2>Joint Institute for disease Control</h2>
								<p>Always there to cater for health related Emergencies.</p>								
								<a href="#" class="effect6">Get More</a>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			</script>
		<!-- //FlexSlider -->
	</div>
	<!--banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h4>JIC <span>Joint Institute</span>  for disease Control </h4>
			<p>The JIC is one of the major operating components of the Department of Health and Human Services. View JIC’s Official Mission Statements/Organizational Charts to learn more about JIC′s organizational structure. </p>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--features-->
	<div class="features">
		<div class="container">
			<div class="col-md-6 feature-grids">
				<h3 class="title">WHAT <span>WE ARE</span></h3>
				<p>JIC works 24/7 to protect America from health, safety and security threats, both foreign and in the U.S. Whether diseases start at home or abroad, are chronic or acute, curable or preventable, human error or deliberate attack, JIC fights disease and supports communities and citizens to do the same.</p>
				
				<div class="more">
					<a href="#" class="effect6">Read More</a>
				</div>
			</div>
			
			<div class="col-md-6 feature-grids">
				<h3 class="title">OUR SPECIFICATIONS</h3>
				<div class="pince">
					<div class="pince-left">
						<h5>01</h5>
					</div>
					<div class="pince-right">
						<h4>Disease Reporting </h4>
						<p>JIC has always been there saving lives and uplifting the people.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="pince">
					<div class="pince-left">
						<h5>02</h5>
					</div>
					<div class="pince-right">
						<h4>Disease Control </h4>
						<p>JIC has always been there saving lives and uplifting the people.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="pince">
					<div class="pince-left">
						<h5>03</h5>
					</div>
					<div class="pince-right">
						<h4>Disease Prevention </h4>
						<p>JIC has always been there saving lives and uplifting the people.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//features-->
	<!--projects-->
	<div class="projects">
		<div class="container">
			<div class="col-md-3 project-right ">
				<h3 class="title">OUR <span> PROJECTS</span></h3>
				<p>&nbsp;</p>
				<p>JIC is always on the move. Helping people and nations.</p>
			</div>
			<div class="col-md-9 project-left">
				<!-- flex-slider -->
				<div class="work-bottom">
					<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
						<ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">																																		
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img1.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img2.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img3.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img4.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
						</ul>
						<div class="nbs-flexisel-nav-left" style="top: 138px;"></div><div class="nbs-flexisel-nav-right" style="top: 138px;"></div></div></div>
							<script type="text/javascript">
								$(window).load(function() {
									$("#flexiselDemo1").flexisel({
										visibleItems: 4,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
							</script>
							<script type="text/javascript" src="js/jquery.flexisel.js"></script>				
						<!-- //flex-slider -->	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//projects-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title"> OUR SERVICES</h3>
			<div class="services-info">
				<div class="servc-icon">
					<a href="#" class="diamond"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<p class="servc-text">Specialist</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="diamond"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					<p class="servc-text"> Prevention </p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="diamond"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
					<p class="servc-text">Reporting</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="diamond"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
					<p class="servc-text"> Control</p>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
<?php
include('foot.php');
?>