<footer class="w3l-footer-66" style="background:#400082 !important;">
		<!-- footer -->
		<div class="footer-66-info">
			<div class="container">
				<div class="row footer-top">
					<div class="col-lg-4 footer-grid_section_w3layouts pr-lg-5">
						<h2 class="logo-2 mb-lg-4 mb-3">
							<a class="navbar-brand" href=""><img style="height: 220px;
width: 240px;" src="<?php echo base_url();?>assets/assets_home/images/logo1.jpeg"></img></a>
							<!-- if logo is image enable this
									<a class="navbar-brand" href="#index.html">
										<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
									</a> -->
						</h2>


					</div>
					<div class="col-lg-8 footer-right" style="color:white;">

						<div class="bottom-w3layouts-sec-nav">
							<div class="row sub-content-botom mx-0">
								<div class="col-md-4 footer-grid_section_w3layouts pl-lg-0">
									<h3 class="footer-title">Information</h3>
									<ul class="footer list-unstyled">
										<li>
											<a style="color:white;" href="<?php echo base_url();?>">Home</a>
										</li>
										<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_about">About Us</a>
										</li>
										<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_hindi">Hindi</a>
										</li>
											<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_punjabi">Punjabi</a>
										</li>
											<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_tamil">Tamil</a>
										</li>
											<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_urdu">Urdu</a>
										</li>
											<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_nepali">Nepali</a>
										</li>
											<li>
											<a style="color:white;" href="<?php echo base_url();?>User/load_buy_indonesian">Gujarati</a>
										</li>

										<li>
											<a style="color:white;" href="<?php echo base_url();?>User/contact">Contact Us</a>
										</li>
										<li>
											<a style="color:white;" href="<?php echo base_url();?>User/terms">Terms & Conditions</a>
										</li>
									</ul>
								</div>

								<div class="col-md-4 footer-grid_section_w3layouts ">
									<h3 class="footer-title">Contact Hours</h3>
									<ul class="wrk-schedule-block">
										<li style="color:white;">Monday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Tuesday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Wednesday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Thursday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Friday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Saturday<span class="schedule-time" style="color:white;">09:00 – 17:00</span></li>
										<li style="color:white;">Sunday<span class="schedule-time" style="color:white;">Rest</span></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cpy-right py-3">
		<center>
		<h3 style="color:red;"> DISCLAIMER:</h3>

		<p classs="text-center" style="color:white;text-align:justify;width:90%;" >
		The results from this Mock Exam Score Report should be used as a guide only. We make no guarantee that this will reflect the scores on your real exam. Questions from the mock exam are intended for use as exam revision or as a personal development resource only. Whilst we have made every effort to provide questions in a format as close to the real exam as possible, the questions contained herein may not be an accurate reflection of the types of questions on the real exam. To ensure your best chances of obtaining good scores, make sure you react to the specific questions on the day of your real exam.
Test results will be provided only once per Mock Test. But you are allowed to practise the same mock test N number of times. In order to revaluate the same mock test again and again additional $5 will be charged per mock test. Good luck!.</center>

			<p class="text-center" style="color:white;">© 2020 Hindi NAATI Test

			</p>
		</div>
		<!-- move top -->
		<!--<button onclick="topFunction()" id="movetop" title="Go to top">
			<span class="fa fa-arrow-up"></span>
		</button>-->
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->
	</footer>
	<!--//footer-66 -->
</body>

</html>

<script src="<?php echo base_url();?>assets/assets_home/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!-- stats -->
<script src="<?php echo base_url();?>assets/assets_home/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/assets_home/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="<?php echo base_url();?>assets/assets_home/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!-- for blog carousel slider -->
<script src="<?php echo base_url();?>assets/assets_home/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //testimonials owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
	window.onbeforeunload = function() {
       if (data_needs_saving()) {
           return "Do you really want to leave our brilliant application?";
       } else {
          return;
       }
    };
</script>

<!-- //script for Testimonials-->
<!-- //script -->
<script>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60e352a0649e0a0a5ccaa91b/1f9rvlh2g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script src="<?php echo base_url();?>assets/assets_home/js/bootstrap.min.js"></script>