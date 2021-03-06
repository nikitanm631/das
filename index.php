<!DOCTYPE html>
<html lang="en">
<head>
	<title>Das Hospital | Home </title>
	<meta name = "keywords" content = "multi-speciality hospital">
	<meta name = "description" content = "multi-speciality hospital in mumbai">

	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/menu.php'; ?>
	<div class="wrapper">

		<!-- BANNER SECTION -->
		<section class="banner-main">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="myimages/slider/1.jpg" alt="">
			    </div>

			    <div class="item">
			      <img src="myimages/slider/2.jpg" alt="">
			    </div>


			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<!-- END BANNER SECTION -->

		<!-- APPOINTMENT SECTION -->
		<section class="appointment-sect">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="app-form bg-red">
							<div class="row">
								<div class="col-md-4">
									<h3>Book an Appointment</h3>
								</div>
								<div class="col-md-8">
									<form class="banner-contact-n" action="index.html" method="post">
										<div class="col-md-5">
											<div class="form-group">
												<input type="text" name="" value="" class="form-control" placeholder="Your Name">
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<input type="text" name="" value="" class="form-control" placeholder="Department">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input type="submit" name="submit" value="BOOK" class="btn btn-default btn-theme">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END APPOINTMENT SECTION -->

		<!-- services section -->
		<section class="service-sec-n pt-55 pb-40" ng-app="servicelist-a" ng-controller="servicelist-ctrl-a">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<h4>Feel beautiful, be beautiful</h4>
						<h1 class="heading">Our <span class="text-red"> Services</span> </h1>
						<p class="sub-heading">When it comes to choosing multispeciality hospital, don’t trust your mind to just anyone. Choose any of our services from our procedures.</p>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="service-col3">
							<h5 class="text-uppercase">All Services</h5>
							<div class="service-list">
								<div class="sidelist">
								  <ul>
										<li ng-repeat="service in services | limitTo : 8 | filter:{type:'special'}"><a ng-href="{{service.url}}">{{service.name}}</a> </li>


								    <!-- <a href="#"> <li class="active">D&C (Dilation and Curettage)</li> </a>
								    <a href="#"> <li>Laparoscopic Adjustable Gastric Band</li> </a>
								    <a href="#"> <li>Gastric Balloon</li> </a>
								    <a href="#"> <li>Gastric Plication</li> </a>
								    <a href="#"> <li>Mini Port Surgeries</li> </a>
								    <a href="#"> <li>Laparoscopic Sleeve Resection</li> </a>
								    <a href="#"> <li>Single Port Surgeries</li> </a>
								    <a href="#"> <li>Gall Bladder (Biliary) Stone Treatment</li> </a> -->


								    <!-- <a href="#"> <li>Colonoscopy</li> </a> -->
								    <!-- <a href="#"> <li>Endoscopic Surgery</li> </a>
								    <a href="#"> <li>Laparoscopic Surgery</li> </a>
								    <a href="#"> <li>Laparoscopic Hernial Repair</li> </a>
								    <a href="#"> <li>Laparoscopic Hiatus Hernia Repair</li> </a>
								    <a href="#"> <li>Laparoscopic Nephrectomy</li> </a>
								    <a href="#"> <li>Laparoscopic Cholecystectomy</li> </a>
								    <a href="#"> <li>Endoscopy - Diagnostic & Therapeutic</li> </a> -->
								  </ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="service-col9">
							<div class="owl-carousel owl-theme index-services">
						    <div class="item">
						    	<div class="service-col-n">
						    		<img src="http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg" alt="Das Hospital Services" class="img-responsive">
										<h4>General Surgery</h4>
										<p>Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
										<a href="#" class="btn btn-light">Find Out More</a>
						    	</div>
						    </div>
								<!-- <div class="item" ng-repeat="service in services | limitTo : 12">
									<div class="service-col-n">
										<img src="{{service.image}}" alt="Das Hospital Services" class="img-responsive">
										<h4>{{service.name}}</h4>
										<p>{{service.content}}</p>
										<a href="{{service.url}}" class="btn btn-light">Find Out More</a>
									</div>
								</div> -->
								<!-- <div class="item">
									<div class="service-col-n" ng-repeat="service in services | limitTo : 12">
										<img src="{{service.image}}" alt="Das Hospital Services" class="img-responsive">
										<h4>{{service.name}}</h4>
										<p>{{service.content}}</p>
										<a href="{{service.url}}" class="btn btn-light">Find Out More</a>
									</div>
								</div> -->
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- services section end -->

		<!-- Testimonial section -->
		<section class="testimonial-sec pt-35 pb-40">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4>A Good Word Means A Lot</h4>
						<h1 class="heading">Client <span class="text-red"> Testimonials </span> </h1>

						<br>

							<div class="owl-carousel owl-theme testimonials">

									<div class="item">

											<i class="fa fa-quote-left"></i>
											<h4>Very Satisfied</h4>
											<p class="text-justify">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<p> <b>- Name</b> </p>
											<i class="fa fa-star text-red"></i>
											<i class="fa fa-star text-red"></i>
											<i class="fa fa-star text-red"></i>
											<i class="fa fa-star text-red"></i>
											<i class="fa fa-star"></i>
											<br>
									</div>

							</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial section -->

		<!-- Doctors section -->
		<section class="pt-55 pb-40 doc-sec">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h4>Professionalism. Excellence. Experience.</h4>
						<h1 class="heading">Inspiring <span class="text-red"> confidence </span> </h1>
						<p class="sub-heading">We ensure individualized and personal care that puts your needs and expectations first, and that starts with a one-on-one consultation in our office.</p>
						<br>
					</div>
				</div>
				<div class="row pb-40">
					<div class="col-md-12">

						<div class="owl-carousel owl-theme doctors">
							<div class="item">
								<div class="doc-box">
									<div class="img-sec">
										<img src="http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2018/03/cosmetic-surgery-img-03.jpg" alt="" class="img-responsive">
									</div>
									<div class="name-sec bg-red pad">
										<p>Head Surgeon</p>
										<h3 class="heading"> Dr Das </h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="row pt-55">
					<div class="col-sm-8 col-sm-offset-2 text-center">
						<h4>Trust the Medicare professionals</h4>
						<h1>Results now <span class="text-red"> & forever </span> </h1><br>
						<p class="sub-heading">Today, we’re able to say with pride that we have some of the most qualified professionals ready to exceed your expectations and provide treatment.</p>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<img src="myimages/team.png" alt="Das Hospital" class="img-responsive" style="width:100%;">
					</div>
				</div>
			</div>
		</section>
		<!-- End Doctors section -->

		<!-- contact section -->
		<section class="contact-sec-n ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8 no-pad">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.0932358920318!2d72.89757181490087!3d19.05963788709731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf5650e2d933%3A0x6303c334d153505e!2sDr+Das+Hospital!5e0!3m2!1sen!2sin!4v1534740626131" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<div class="col-sm-4 bg-red pad index-details">
						<div class="row">
							<div class="col-sm-12">
								<div class="sec-head">
									<h3 class="text-white"> Working Hours </h3>
									<br>
								</div>

								<table class="table">
									<tr>
										<td> <b>MON-WED</b> </td>
										<td>8AM – 7PM</td>
									</tr>
									<tr>
										<td> <b>THU</b>  </td>
										<td>8AM – 7PM</td>
									</tr>
									<tr>
										<td> <b>FRI & SAT</b> </td>
										<td>8AM – 7PM</td>
									</tr>
									<tr>
										<td> <b>SUN</b> </td>
										<td>Closed</td>
									</tr>
								</table>

									<a href="contact.php"><p class="text-white"> <i class="fa fa-calendar text-white"></i> &nbsp;&nbsp;&nbsp; Book An Appointment</p></a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="sec-head">
									<h3 class="text-white"> Contact Details </h3>
								</div>
								<p class="text-white"> <i class="fa fa-mobile text-white"></i> &nbsp;&nbsp;&nbsp; + 1234567890</p>
								<p class="text-white"> <i class="fa fa-envelope text-white"></i> &nbsp;&nbsp;&nbsp; info@example.com</p>
								<p class="text-white"> <i class="fa fa-map-marker text-white"></i> &nbsp;&nbsp;&nbsp; Address</p>

							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-sm-6">
						<div class="sec-head">
							<h1> <span class="text-red">Working</span> Hours </h1>
							<br>
						</div>

						<table class="table">
							<tr>
								<td> <b>MON-WED</b> </td>
								<td>8AM – 7PM</td>
							</tr>
							<tr>
								<td> <b>THU</b>  </td>
								<td>8AM – 7PM</td>
							</tr>
							<tr>
								<td> <b>FRI & SAT</b> </td>
								<td>8AM – 7PM</td>
							</tr>
							<tr>
								<td> <b>SUN</b> </td>
								<td>Closed</td>
							</tr>
						</table>

							<a href="contact.php"><p> <i class="fa fa-calendar text-red"></i> &nbsp;&nbsp;&nbsp; Book An Appointment</p></a>


					</div>
					<div class="col-sm-6 details-col-n">
						<div class="sec-head">
							<h1> <span class="text-red">Contact </span> Details </h1>
						</div>
						<br>
						<p class="pad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>

						<div class="col-sm-4 text-center">
							<img src="myimages/phone.png" alt="Das Hospital" class="img-responsive">
							<h5>Call Us Anytime</h5>
							<h5><b>+123 456 7890</b> </h5>
						</div>

						<div class="col-sm-4 text-center">
							<img src="myimages/marker.png" alt="Das Hospital" class="img-responsive">
							<h5>Visit Us in person</h5>
							<h5><b>Mumbai, Maharashtra</b> </h5>
						</div>

						<div class="col-sm-4 text-center">
							<img src="myimages/phone.png" alt="Das Hospital" class="img-responsive">
							<h5>Email Us</h5>
							<h5><b>contact@dashospital.com</b> </h5>
						</div>
					</div>
				</div> -->
			</div>
		</section>
		<!-- End Contact Section -->

		

	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>
