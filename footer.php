		<footer id="spinybab-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 spinybab-widget">
						<h4>About Company</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="spinybab-social-icons">
								<li><a href="<?php echo get_theme_mod('spiny_babbler_twitter');?>"><i class="icon-twitter"></i></a></li>
								<li><a href="<?php echo get_theme_mod('spiny_babbler_facebook');?>"><i class="icon-facebook"></i></a></li>
								<li><a href="<?php echo get_theme_mod('spiny_babbler_linkedin');?>"><i class="icon-linkedin"></i></a></li>
								<li><a href="<?php echo get_theme_mod('spiny_babbler_pinterest');?>"><i class="icon-pinterest"></i></a></li>
								<li><a href="<?php echo get_theme_mod('spiny_babbler_skype');?>"><i class="icon-skype"></i></a></li>
							</ul>
						</p>
					</div>
					<?php dynamic_sidebar('sidebar-1');?>
					<?php dynamic_sidebar('sidebar-2');?>
					<?php// dynamic_sidebar('sidebar-3');?>
					<!-- <div class="col-md-3 col-md-push-1">
						<h4>Recent Blog</h4>
						<ul class="spinybab-footer-links">
							<li>
								<span>&mdash; 20 Jan, 2017</span>
								<a href="#">Results of Annual General Meeting</a>
							</li>
							<li>
								<span>&mdash; 19 Jan, 2017</span>
								<a href="#">Construction was awarded with “The Best Construction Company” prize</a>
							</li>
							<li>
								<span>&mdash; 18 Jan, 2017</span>
								<a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-md-push-1 spinybab-widget">
						<h4>Information</h4>
						<p>
							<ul class="spinybab-footer-links">
								<li><a href="#"><i class="icon-check"></i> Our Company</a></li>
								<li><a href="#"><i class="icon-check"></i> Certification</a></li>
								<li><a href="#"><i class="icon-check"></i> Our services</a></li>
								<li><a href="#"><i class="icon-check"></i> Career</a></li>
								<li><a href="#"><i class="icon-check"></i> Core Values</a></li>
								<li><a href="#"><i class="icon-check"></i> Company History</a></li>
								<li><a href="#"><i class="icon-check"></i> FAQ</a></li>
							</ul>
						</p>
					</div> -->
					<div class="col-md-3 col-md-push-1">
						<h4>Contact Info</h4>
						<ul class="spinybab-footer-links">
							<li><?php echo get_theme_mod('spiny_babbler_address');?></li>
							<li><a href="tel://<?php echo get_theme_mod('spiny_babbler_phone');?>"><i class="icon-phone"></i> <?php echo get_theme_mod('spiny_babbler_phone');?></a></li>
							<li><a href="mailto:<?php echo get_theme_mod('spiny_babbler_email');?>"><i class="icon-envelope"></i><?php echo get_theme_mod('spiny_babbler_email');?></a></li>
							<li><a href="<?php echo get_theme_mod('spiny_babbler_web');?>"><i class="icon-location4"></i><?php echo get_theme_mod('spiny_babbler_web');?></a></li>
							<li><a href="<?php echo get_theme_mod('spiny_babbler_skype');?>"><i class="icon-skype"></i><?php echo get_theme_mod('spiny_babbler_skype');?></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to spinybab can't be removed. Template is licensed under CC BY 3.0. -->
	 					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved.  <br>This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://spinybab.com" target="_blank">spinybab</a></small>
						<!-- Link back to spinybab can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	 <?php wp_footer();?>
	</body>
</html>

