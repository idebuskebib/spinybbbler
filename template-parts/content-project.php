<div class="col-md-7 col-md-push-1">
	<div class="row">
		<div class="col-md-12 ">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
				<?php 
			    $args = array(
			                 'post_type'=>'project',
			                 'posts_per_page'=>3
			                  );
			    $query = new WP_Query($args);
			    $i=1;
				if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                    	$url = $thumb[0]; 
				?>
						<div class="carousel-item <?php if($i == 1){echo "active";}?> item">
							<a  class="project" style="background-image: url(<?php echo $url;?>);">
								<div class="desc-t">
									<div class="desc-tc">
										<div class="desc">
										    <h3><span><small><?php echo $i;?></small></span><?php the_title();?></h3>
										    <p><?php the_excerpt();?></p>
										</div>
									</div>
							    </div>
							</a>
						</div>
					<?php
					 $i++; 
					 endwhile;
					 endif;
					?>
						
				</div>
					
			</div>
		</div>
	</div>
</div>
