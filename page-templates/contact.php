<?php
/* Template Name: Contact*/
 get_header();?>

		<aside id="spinybab-hero">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_theme_mod('spiny_babbler_contact_image');?>" class=" img-fluid">
					<div class="bg-color"></div>
					<div class="container-fluid">
							<!-- col-md-8 col-sm-12 col-md-offset-2 -->
							<!-- slider-text -->
							<!-- slider-text-inner text-center -->
		  				<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
		    				<h2>Get in Touch</h2>
						   	<h1>Contact Us</h1>
		 			    </div>
				 	</div>
				</div>
			</div>
		</aside>

		<div id="#" class="spinybab-map">
			<iframe src="https://www.google.com/maps/embed?pb" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div id="spinybab-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> Mahalaxmi Nagar-2,, <br> Lalitpur, Nepal</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://9779861524447">+ 977-9861524447</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@spinybabbler.com.np</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">spinybabbler.com.np</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Get In Touch</h2>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>


		<div id="spinybab-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 spinybab-heading animate-box">
						<h2>Sign up for a Newsletter</h2>
						<div class="row">
							<div class="col-md-7">
								<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
							</div>
							<div class="col-md-5">
								<form class="form-inline qbstp-header-subscribe">
									<div class="row">
										<div class="col-md-12 col-md-offset-0">
											<div class="form-group">
												<input type="text" class="form-control" id="email" placeholder="Enter your email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer();?>