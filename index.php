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
		<section class="service-sec-n pt-55 pb-40">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sec-head">
							<h1 class="text-center">Our <span class="text-red">Services</span> </h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="service-col3">
							<h4>All Services</h4>
							<ul>

							</ul>
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

						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- services section end -->


	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>
