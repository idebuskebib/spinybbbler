<?php
/*Template Name:About
*/
get_header();
?>
		<aside id="spinybab-hero">
			<div class="carousel-inner">
				<div class="carousel-item active">
	  					<img src="<?php echo get_theme_mod('spiny_babbler_About_image');?>" class=" img-fluid">
	  					<div class="bg-color"></div>
	  					<div class="container-fluid">
	  						<!-- col-md-8 col-sm-12 col-md-offset-2 -->
	  						<!-- slider-text -->
	  						<!-- slider-text-inner text-center -->
				   			
			  				<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
			    				<h2>Company Info</h2>
			    				<h1>About Us<h1>
			 			    </div>
					 	</div>
					</div>
			</div>
		</aside>

		<div id="spinybab-about">
			<div class="container">
				<div class="row row-pb-lg">
					<?php if(have_posts()):while(have_posts()):the_post(); 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                	$url = $thumb[0];
					?>
					<div class="col-md-6">
						<div class="about animate-box">
							<h2><?php the_title();?></h2>
							<p><?php the_content();?></p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="<?php echo $url;?>" >
					</div>
					<?php
					endwhile;
					endif; 
					?>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-2 text-center animate-box spinybab-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Our</span> <span class="thick">Engineers</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<?php get_template_part( 'template-parts/content', 'team' ); ?>
				
			</div>
		</div>

				<!-- <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box spinybab-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Our</span> <span class="thick">Engineers</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/rupesh.jpg);">
							<a href="#" class="desc">
								<h3>Rupesh Singh</h3>
								<span>Software Engineer</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/sudipparajuli.jpg);">
							<a href="#" class="desc">
								<h3>Sudip Parajuli</h3>
								<span>Software Engineer</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/dipeshchand.jpg);">
							<a href="#" class="desc">
								<h3>Dipesh Chand</h3>
								<span>Senior QA</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/rupesh.jpg);">
							<a href="#" class="desc">
								<h3>Rupesh Singh</h3>
								<span>Software Engineer</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/sudipparajuli.jpg);">
							<a href="#" class="desc">
								<h3>Sudip Parajuli</h3>
								<span>Software Engineer</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image: url(images/dipeshchand.jpg);">
							<a href="#" class="desc">
								<h3>Dipesh Chand</h3>
								<span>Senior QA</span>
								<div class="parag">
									<p>Even the all-powerful Pointing has no control about the blind texts</p>
								</div>
							</a>
						</div>
					</div>
				</div> -->
<?php get_footer();?>
