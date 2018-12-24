		<?php 
		    $args = array(
		                 'post_type'=>'slider',
		                 'posts_per_page'=>3
		                  );
		    $query = new WP_Query($args);
		    $i=0;
			if($query->have_posts()): 
		?>
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
		  	<ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
		  		<?php 
						while($query->have_posts()):$query->the_post(); 
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                    	$url = $thumb[0];
                ?>
		    	 
		    	<div class="carousel-item <?php if($i == 0){echo "active";} ?>">
  					<img src="<?php echo $url;?>" class=" img-fluid">
  					<div class="bg-color"></div>
  					<div class="container-fluid">
  						<!-- col-md-8 col-sm-12 col-md-offset-2 -->
  						<!-- slider-text -->
  						<!-- slider-text-inner text-center -->
			   			
				  				<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
				    				<h2><?php the_title();?></h2>
				    				<h1><?php global $post;  echo get_post_meta( get_the_ID(), 'spinybabbler_slider_meta_field', true ); ?><h1>
				 			    </div>
				 	
				 	</div>
				</div>
		    	<?php 
		    	    $i++;
		    		endwhile;
		    	?>
		    </div>
		  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  	</a>
		</div>
		<?php 
		 endif;
		?>
		<!-- <div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Providing all Kinds of Construction Services</h2>
				   					<h1>Constructing Spaces For You</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div> -->