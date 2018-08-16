<footer class="pad">
	<p class="text-center"> Copyright &copy; 2018 all rights reserved </p>
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
