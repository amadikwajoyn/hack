<?php
include('head.php');
?>
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<!--about-->
	<div class="about">
		<div class="container">
			<h3 class="title1">About<span> Us</span></h3>
			<div class="about-info">
				<div class="col-md-8 about-grids grid-top">
					<h4>Center For Disease Control and Prevention </h4>
					<p class="top">JIC works 24/7 to protect America from health, safety and security threats, both foreign and in the U.S. Whether diseases start at home or abroad, are chronic or acute, curable or preventable, human error or deliberate attack, JIC fights disease and supports communities and citizens to do the same.</p>		
					<div class="about-row">
						<div class="col-md-4 about-imgs">
							<img src="images/img5.jpg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-imgs">
							<img src="images/img6.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-imgs">
							<img src="images/img7.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 about-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>Office Hours :</h4>
						</div>
						<div class="time-bottom">
							<h5>Mon-Fri:10am-9pm </h5>
							<h5>Sat-Sun:By Special Appointment</h5>
							<p>You can always contact a Representative at no cost.</p>
						</div>
					</div>
					<div class="testi">
						<h3 class="title1">Testimo<span>nial</span></h3>
						<!--//End-slider-script -->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>" I AM VERY PLEASED.</h4>
										<p>JIC has always been there saving lives and uplifting the people.</p>
										<div class="testi-subscript">
											<p><a href="#">John Doe,</a>U. S. A.</p>
											<span class="sbscrpt"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" I AM LOREM IPSUM.</h4>
										<p>JIC has always been there saving lives and uplifting the people.</p>
										<div class="testi-subscript">
											<p><a href="#">Elit Semper,</a>BRAZIL</p>
											<span class="sbscrpt"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" CONSECTETUR PIMAGNA.</h4>
										<p>JIC has always been there saving lives and uplifting the people.</p>
										<div class="testi-subscript">
											<p><a href="#">Amet Doe,</a>NIGERIA</p>
											<span class="sbscrpt"> </span>
										</div>	
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-->
	<!--about-slid-->
	<div class="about-slid"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h2>Center For Disease Control and Prevention</h2>
				<p>JIC increases the health security of our nation. As the nation’s health protection agency, JIC saves lives and protects people from health threats. To accomplish our mission, JIC conducts critical science and provides health information that protects our nation against expensive and dangerous health threats, and responds when these arise.</p>
			</div>
		</div>
	</div>
	<!--//about-slid-->
	

	<!--about-servcs-->
	<div class="about-servcs"> 
		<div class="container">
			<h3 CLASS="title1">We Specialize In </h3>
			<h5>We provide a wide range of services </h5>
			<div class="servcs-info">
				<div class="col-md-12 sevcs-grids">
					<h4><span>01. </span>DISEASE REPORTING AND CONTROL</h4>
					<p>JIC’s Center, Institute, and Offices (CIOs) allow the agency to be more responsive and effective when dealing with public health concerns. Each group implements JIC′s response in their areas of expertise, while also providing intra-agency support and resource-sharing for cross-cutting issues and specific health threats.</p>			
				</div>
				
			</div>
			
		</div>
	</div>
	<!--//about-servcs-->




<?php
include('foot.php');
?>