<footer>

	<!-- TOP FOOTER -->
	<div class="container-fluid top-footer pad">

		<div class="row">
			<div class="col-md-10 col-md-offset-1 floater">
				<div class="row">

					<div class="col-md-3">
						<img src="myimages/logo.jpg" alt="" class="img-responsive">
					</div>

					<div class="col-md-5">
						<h2 class="text-dark">We Take Care Of <span class="text-red">Your Needs</span> </h2>
					</div>

					<div class="col-md-4">
						<i class="fa fa-facebook text-dark"></i>
						<i class="fa fa-twitter text-dark"></i>
						<i class="fa fa-google-plus text-dark"></i>
					</div>

				</div>
			</div>
		</div>
		<br>
		<div class="row text-dark">

			<div class="col-md-3">
				<h3> <b>About Us</b> </h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
			</div>

			<div class="col-md-3">
				<h3> <b>Quick Links</b> </h3>
				<ul>
					<li> <a href="index.php">Home</a> </li>
					<li> <a href="about.php">About Us</a> </li>
					<li> <a href="services.php">Services</a> </li>
					<li> <a href="blog">Blog</a> </li>
					<li> <a href="gallery.php">Gallery</a> </li>
					<li> <a href="contact.php">Contact Us</a> </li>
				</ul>
			</div>

			<div class="col-md-3">
				<h3> <b>Recent Blog</b> </h3>
				<p>Lorem Ipsum dolor sit amet, consectetur adipisicing elit,</p>
				<p> <b>- By Dr. Das</b> </p>
				<br>
				<p>Lorem Ipsum dolor sit amet, consectetur adipisicing elit,</p>
				<p> <b>- By Dr. Das</b> </p>
			</div>

			<div class="col-md-3">
				<h3> <b>Contact Us</b> </h3>
				<p> <i class="fa fa-phone"></i> +91 123456789</p>
				<p> <i class="fa fa-envelope"></i> info@dashospital.com</p>
				<p> <i class="fa fa-map-marker"></i> Address</p>
			</div>

		</div>

	</div>
	<!-- END TOP FOOTER -->

	<!-- BOTTOM FOOTER -->
	<div class="container-fluid bottom-footer">
		<div class="row">
			<div class="col-md-12 text-center">
				<p> <b>Copyright by Das Hospital 2018. All rights reserved.</b> </p>
			</div>

		</div>
	</div>
	<!-- END  BOTTOM FOOTER -->


</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/appear.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/smoothscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
	});
});
</script>
<script src="js/scripts.js" charset="utf-8"></script>
<script type="text/javascript">
  new WOW().init();
</script>
<script type="text/javascript">
$('.testimonials').owlCarousel({
  loop:true,
  margin:40,
  dot:false,
  nav:false,
  autoplay:true,
  autoplayTimeout:5000,
  autoplaySpeed:2000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:3
      }
  }
})
</script>
<script type="text/javascript">
$('.index-services').owlCarousel({
	loop:true,
	margin:35,
	dot:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplaySpeed:2000,
	responsive:{
			0:{
					items:1
			},
			600:{
					items:2
			},
			1000:{
					items:3
			}
	}
})
</script>
<script type="text/javascript">
$('.doctors').owlCarousel({
	loop:true,
	margin:35,
	dot:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplaySpeed:2000,
	responsive:{
			0:{
					items:1
			},
			600:{
					items:2
			},
			1000:{
					items:4
			}
	}
})
</script>
<?php include 'analytics.php'; ?>
