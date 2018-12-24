<?php get_header();?>
   <div id="spinybab-hero">
 	<?php get_template_part( 'template-parts/content', 'slider' ); ?>
 	</div>
 		<div id="spinybab-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-pull-4 animate-box">
						<div class="box text-center">
							<span class="num"><?php echo get_theme_mod('spiny_babbler_about_years_text');?></span>
							<span class="yr">Years</span>
							<span class="thin">Experience</span>
						</div>
					</div>
					<div class="col-md-4 col-md-push-4 animate-box spinybab-heading animate-box">
						<span class="sm"><?php echo get_theme_mod('spiny_babbler_about_welcomesm_text');?></span>
						<h2><span class="thin"><?php echo get_theme_mod('spiny_babbler_about_welcomethin_text');?></span> <span class="thick"><?php echo get_theme_mod('spiny_babbler_about_welcomethick_text');?></span></h2>
					</div>
					<div class="col-md-4 animate-box">
						<p><?php echo get_theme_mod('spiny_babbler_about_welcomearticle_text');?></p>
					</div>
				</div>
			</div>
		</div>
		<div id="spinybab-services" class="spinybab-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box spinybab-heading animate-box">
						<span class="sm">What We Do?</span>
						<h2><span class="thin">We Offer</span> <span class="thick">Services</span></h2>
						<p><?php echo get_theme_mod('spiny_babbler_services_text');?></p>
						<p><a href="<?php echo get_theme_mod('spiny_babbler_serviceslink_text');?>">More Services <i class="icon-arrow-right3"></i></a></p>
					</div>
						<?php get_template_part('template-parts/content','services');?>
				</div>
			</div>
		</div>
		<div id="spinybab-project">
			<div class="container">
				<div class="row">
					<div class="col-md-4  spinybab-heading ">
						<span class="sm">Works</span>
						<h2><span class="thin">Our Done</span> <span class="thick">Projects</span></h2>
						<p><?php echo get_theme_mod('spiny_babbler_project_text');?></p>
						<p><a href="<?php echo get_theme_mod('spiny_babbler_projectlink_text');?>">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
					<?php 
					 get_template_part( 'template-parts/content', 'project' );
					?>
				</div>
			</div>
		</div>
		<div id="spinybab-testimony" class="spinybab-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box spinybab-heading animate-box">
						<span class="sm">Testimonial</span>
						<h2><span class="thin">What Our</span> <span class="thick">Client Says</span></h2>
					</div>
					<?php 
					 get_template_part( 'template-parts/content', 'testi' );
					?>
				</div>
			</div>
		</div> 
        <?php  get_template_part( 'template-parts/content', 'subscribe' ); ?>   
 <?php get_footer();?>