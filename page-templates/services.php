<?php
/*Template Name: Services*/
get_header();
?>
<aside id="spinybab-hero">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo get_theme_mod('spiny_babbler_service_image');?>" class=" img-fluid">
			<div class="bg-color"></div>
			<div class="container-fluid">
					<!-- col-md-8 col-sm-12 col-md-offset-2 -->
					<!-- slider-text -->
					<!-- slider-text-inner text-center -->
  				<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
    				<h2>What We Do?</h2>
	   				<h1>Our Services</h1>
 			    </div>
		 	</div>
		</div>
	</div>
</aside>

<div id="spinybab-services">
	<div class="container">
		<div class="row">
		<?php 
		    $args = array(
		                 'post_type'=>'service',
		                  );
		    $query = new WP_Query($args);
		    $i=0;
			if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                	$url = $thumb[0]; 
		 	$i= 1;
	        if($i%3==0){ echo'</div><div class="row">';} ?>
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i class="<?php global $post;  echo get_post_meta( $post->ID,'spinybabbler_service_meta_field', true );?>"></i>
					</span>
					<div class="desc">
						<h3><?php the_title();?></h3>
						<p><?php the_content();?></p>
					</div>
				</div>
			</div>
		<?php	
		endwhile;
		endif;
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

<?php get_footer();?>