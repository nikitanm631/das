<!DOCTYPE html>
<html lang="en">
<head>
	<title>Das Hospital | Appointments </title>
	<meta name = "keywords" content = "multi-speciality hospital">
	<meta name = "description" content = "multi-speciality hospital in mumbai">

	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/menu.php'; ?>
	<div class="wrapper">

    <!-- SINGLE BANNER -->
    <section class="banner-head">
      <div class="container">
        <div class="row">
        	<div class="col-md-10">
        		<h2>Appointments</h2>
        	</div>
        </div>

      </div>
    </section>
    <!-- END SINGLE BANNER -->

    <section class="appointment-page pt-55 pb-40 contact-page">
      <div class="container">
        <div class="row pb-40">

          <div class="col-sm-6 col-sm-offset-3 text-center">
						<h4>Get the right procedure</h4>
            <h1>Book with <span class="text-red">your surgeon </span> </h1><br>
						<p>Some up and coming trends are healthcare consolidation for independent healthcare centers that see a cut in unforeseen payouts.</p>
            <br>

          </div>

        </div>

				<div class="row details-col-n border-b pb-40">
					<div class="col-sm-8 col-sm-offset-2">
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
				</div>

				<div class="row pt-55 pb-40">
					<div class="col-md-6 col-sm-offset-3">

						<form class="appointment-form-n" action="index.html" method="post">
								<div class="form-group">
									<input type="text" name="name" value="" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" name="email" value="" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" name="subject" value="" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="message" rows="8" cols="80" class="form-control textarea" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="" value="Send Message" class="btn btn-theme">
								</div>
							</form>
          </div>
				</div>
      </div>
    </section>

	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>
