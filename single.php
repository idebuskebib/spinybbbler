<?php get_header();?>
<?php if(have_posts()):the_post();
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
$url = $thumb[0];
?>
	<aside id="spinybab-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo $url;?>);">
		   		<div class="overlay"></div>
		   		<div class="container-fluid">
		   			<div class="row">
			   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
			   				<div class="slider-text-inner text-center">
			   					<h2><?php the_title();?></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="spinybab-about">
		<div class="container">
			<div class="about animate-box">
				<h2><?php the_title();?></h2>
				<p><?php the_content();?></p>
			</div>
		</div>
	</div>
<?php
endif;
get_footer();
?>