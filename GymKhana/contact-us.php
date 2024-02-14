<?php include "header.php" ?>
	<!-- Header -->
	
	<div class="page-content bg-white">
		
	<!--banner-->
		<div class="contact-bnr" style="background-image: url(assets/images/background/bg9.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<div class="contact-info style-1 text-start text-white">
							<h2 class="title wow fadeInUp" data-wow-delay="0.1s">DISCOVER US</h2>
							<p class="text wow fadeInUp" data-wow-delay="0.2s"><span class="text-decoration-underline text-white"><a class="text-white" href="javascript:void(0)">ROHAN GYM is here to help you;</a></span> <br> Our experts are available to answer any questions you might have. We’ve got the answers.</p>
							<div class="contact-bottom wow fadeInUp" data-wow-delay="0.3s">
								<div class="contact-left">
									<h3>Call Us</h3>
									<ul>
										<li><a href="tel:+011234567890">+91-9730635630</a></li>
										<li><a href="tel:+019785687400">+01-77575690</a></li>
									</ul>
								</div>
								<div class="contact-right">
									<h3>Email Us</h3>
									<ul>
										<li>rohangym@.com</li>
									</ul>
								</div>		
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div style="margin-top:-100px ;" class="contact-area1 style-1 m-r20 m-md-r0 wow fadeInUp" data-wow-delay="0.5s">
							<form class="dz-form dzForm" method="POST" action="https://powerzone.dexignzone.com/xhtml/assets/script/contact_smtp.php">
								<input type="hidden" class="form-control" name="dzToDo" value="Contact">
								<input type="hidden" class="form-control" name="reCaptchaEnable" value="0">
								<div class="dzFormMsg"></div>
								<label class="form-label">Your Name</label>
								<div class="input-group">
									<input required type="text" class="form-control" name="dzName">
								</div>
								<label class="form-label">Email Address</label>
								<div class="input-group">
									<input required type="text" class="form-control" name="dzEmail">
								</div>
								<label class="form-label">Phone Number</label>
								<div class="input-group">
									<input required type="text" class="form-control" name="dzPhoneNumber">
								</div>
								<label class="form-label">Massage</label>
								<div class="input-group m-b30">
									<textarea name="dzMessage" rows="4" required class="form-control m-b10"></textarea>
								</div>
								<div class="input-recaptcha m-b20">
									<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
									<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
								</div>
								<div>
									<button name="submit" type="submit" value="submit" class="btn btn-primary w-100 btnhover">SUBMIT</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="content-inner-2 pt-0">
			<div class="map-iframe style-1">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30451.74909157822!2d75.15109585490322!3d17.437269911328237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6a7ad31ab73c3%3A0x16bd05730c981724!2z4KS44KS-4KSC4KSX4KWL4KSy4KS-LCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLAgNDEzMzA3!5e0!3m2!1smr!2sin!4v1706961756432!5m2!1smr!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

		<!-- Call To Action -->
		
		<!-- Call To Action -->	
	</div>
	
	<!-- Footer -->
	<?php include "footer.php" ?>