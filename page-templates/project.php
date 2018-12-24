<?php
/* Template Name: project
*/
get_header();
?>
	<aside id="spinybab-hero">
		<div class="carousel-inner">
			<div class="carousel-items active">
				<img src="<?php echo get_theme_mod('spiny_babbler_project_image');?>" class=" img-fluid">
				<div class="bg-color"></div>
				<div class="container-fluid">
						<!-- col-md-8 col-sm-12 col-md-offset-2 -->
						<!-- slider-text -->
						<!-- slider-text-inner text-center -->
	  				<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
	    				<h2>Secret of Our Success</h2>
				   		<h1>Our Projects</h1>
	 			    </div>
			 	</div>
			</div>
		</div>
	</aside>  

	<div id="spinybab-project">
		<div class="container">
			<div class="row">
				<?php 
		    	$args = array(
		        'post_type'=>'project',
		                );
		    	$query = new WP_Query($args);
		    	if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                	$url = $thumb[0]; 
                ?>
				<div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="<?php echo $url;?>" class="project image-popup-link" style="background-image: url(<?php echo $url;?>);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>1</small></span><?php the_title();?></h3>
										<p><?php the_content();?></p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php 
				endwhile;
		    	endif;
		    	?>
				<!-- <div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="images/unitedconstructions.jpg" class="project image-popup-link" style="background-image: url(images/unitedconstructions.jpg);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>2</small></span>United Constructions</h3>
										<p>An Construction Compnay that build civil Structures.</p>
									</div>
								</div>
							</div>
						</a>
						
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="images/NSInternational.jpg" class="project image-popup-link" style="background-image: url(images/NSInternational.jpg);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>3</small></span>NS International</h3>
										<p>An Manpower Company that Recurits the people at Sinamangal.</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="images/building-4.jpg" class="project image-popup-link" style="background-image: url(images/building-4.jpg);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>4</small></span> California Mega Mall</h3>
										<p>Even the all-powerful Pointing has no control</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="images/building-5.jpg" class="project image-popup-link" style="background-image: url(images/building-5.jpg);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>5</small></span> California Mega Mall</h3>
										<p>Even the all-powerful Pointing has no control</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="item item-2">
						<a href="images/building-6.jpg" class="project image-popup-link" style="background-image: url(images/building-6.jpg);">
							<div class="desc-t">
								<div class="desc-tc">
									<div class="desc">
										<h3><span><small>6</small></span> California Mega Mall</h3>
										<p>Even the all-powerful Pointing has no control</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>  -->
			</div>
		</div>
	</div>




<?php get_footer();?>