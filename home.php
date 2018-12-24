<?php
 get_header();?>
	<aside id="spinybab-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container-fluid">
		   			<div class="row">
			   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
			   				<div class="slider-text-inner text-center">
			   					<h2>Read Events</h2>
			   					<h1>Our Blog</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="spinybab-blog">
			<div class="container">
				<div class="row">
					<?php if(have_posts()):?>
					<article class="animate-box">
						<?php while(have_posts()):the_post();
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