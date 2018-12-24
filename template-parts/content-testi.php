
<div class="col-md-7 col-md-push-1">
	<div class="row animate-box">
		<span class="icon"><i class="icon-quotes-left"></i></span>
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
			<?php 
			    $args = array(
			                 'post_type'=>'testi',
			                 'posts_per_page'=>3
			                  );
			    $query = new WP_Query($args);
			    $i=1;
				if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                    	$url = $thumb[0]; 
				?>
				<div class="carousel-item <?php if($i == 1){echo "active";}?> item">
					<div class="testimony-slide active">
						<div class="testimony-wrap">
							<figure>
								<img src="<?php echo $url;?>" alt="user">
							</figure>
							<blockquote>
								<span><?php the_title();?></span>
								<p><?php the_content();?></p>
							</blockquote>
						</div>
					</div>
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
