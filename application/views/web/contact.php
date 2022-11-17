<!-- /contact-form -->
<section class="w3l-contact-main">
<div class="contant11-top-bg py-5">
	<div class="container py-md-5">
		<div class="row contact-info-left text-center">
			<div class="col-lg-4 col-md-6 contact-info">
				<div class="contact-gd">
					<span class="fa fa-location-arrow" aria-hidden="true"></span>
					<h4>1-to -1 Session for HINDI</h4>
					<p>Online via Zoom Meeting</p>
						<strong><a href="<?php echo base_url();?>User/load_pm_session?name=1-to-1 Session" style="border:2px solid #000000;">Pay Here</a></strong>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 contact-info">
				<div class="contact-gd">
					<span class="fa fa-phone" aria-hidden="true"></span>
					<h4>Phone</h4>
					<p><a href="tel:+44 7834 857829">+61 469738009</a></p>
						<p>Available 24/7</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 contact-info">
				<div class="contact-gd">
					<span class="fa fa-location-arrow" aria-hidden="true"></span>
					<h4>Mail</h4>
					<p><a href="mailto:mail@example.com" class="email">naatimocktests@gmail.com </a></p>
						<p>Reply your email within 2 hours</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //contact-form -->
<!-- /contact-form -->
<section class="w3l-contact-main">
<div class="contact-infhny py-5">
	<div class="container py-lg-5">
		<div class="title-content text-left mb-lg-5 mt-4">
			<h6 class="sub-title">Contact Us</h6>
			<h3 class="hny-title">Drop your message for any info <br>or question.</h3>
		</div>
		<div class="row align-form-map">
			<div class="col-lg-6 form-inner-cont">
				<form action="<?php echo base_url();?>User/ins_contact" method="post" class="signin-form">
					<div class="form-input">
						<label for="w3lName">Name*</label>
						<input type="text" name="name" id="w3lName" placeholder="" />
					</div>
					<div class="form-input">
						<label for="w3lName">Contact No*</label>
						<input  type="number" name="contact" id="w3lName" placeholder="" />
					</div>
					<div class="form-input">
						<label for="w3lSender">Email*</label>
						<input type="email" name="email" id="w3lSender" placeholder="" required="" />
					</div>

					<div class="form-input">
						<label for="w3lMessage">Message*</label>
						<textarea placeholder="" name="message" id="w3lMessage" required=""></textarea>
					</div>

					<button type="submit" class="btn btn-contact">Submit</button>

				</form>
			</div>
			<div class="map col-lg-6 pl-lg-4">
				<iframe
					src="https://maps.google.com/maps?q=brisbane%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"
					frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</section>
