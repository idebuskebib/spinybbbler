<?php
/*
Template Name: Blog
*/
 get_header();?>
	<aside id="spinybab-hero">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo get_theme_mod('spiny_babbler_Blog_image');?>" class=" img-fluid">
			<div class="bg-color"></div>
			<div class="container-fluid">
					<!-- col-md-8 col-sm-12 col-md-offset-2 -->
					<!-- slider-text -->
					<!-- slider-text-inner text-center -->
					<div class="carousel-caption d-none d-md-block col-md-8 col-sm-12 col-md-offset-2 ">
					<h2>Read Events</h2>
			   		<h1>Our Blog</h1>
				    </div>
		 	</div>
		</div>
	</div>
	</aside>  
	<div id="spinybab-blog">
			<div class="container">
				<div class="row">
					<?php 
						$args = array(
				                 'post_type'=>'post',
				                 'posts_per_page'=>10
				                  );
				    	$query = new WP_Query($args);
				    if($query->have_posts()):?>
					<article class="animate-box">
						<?php while($query->have_posts()):$query->the_post();
							$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
                    		$url = $thumb[0];
                    	    global $current_user;
      						get_currentuserinfo();?>
						<div class="blog-img" style="background-image: url(<?php echo $url;?> );"></div>
						<div class="entry">
							<div class="meta text-center">
								<p>
									<span><?php echo get_the_date('F'); ?></span>
									<span><?php echo get_the_date('m,Y'); ?></span>
								</p>
							</div>
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<p class="meta-2"><span><i class="icon-user"></i><?php $current_user->display_name; ?></span> <span><i class="icon-dropbox"></i><?php  get_the_category();?></span></p>
							<p><?php the_excerpt();?></p>
						</div>
					<?php endwhile; ?>
					</article>
					<?php endif;?>
				</div>	
			</div>
	</div>

<?php get_footer();?>