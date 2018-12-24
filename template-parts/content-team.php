<?php 
    $args = array(
                 'post_type'=>'team',
                 'posts_per_page'=>2,
                 
                  );
    $query = new WP_Query($args);
	if($query->have_posts()):
?>
	
	<div class="row">
	<?php 
		while($query->have_posts()):$query->the_post(); 
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
        	$url = $thumb[0]; 
        	$i= 1;
 
	if($i%3==0){ echo'</div><div class="row">';}
 	?>
 	<div class="col-md-4 text-center animate-box">
		<div class="staff" class="staff-img" style="background-image: url(<?php echo $url;?>);">
			<a href="#" class="desc">
				<h3><?php the_title();?></h3>
				<span><?php global $post;  echo get_post_meta( $post->ID,'spinybabbler_team_meta_field', true );?></span>
				<div class="parag">
					<p><?php the_content();?></p>
				</div>
			</a>
		</div>
	</div>
	  
	<?php $i++;?>
			
	<?php
	 	endwhile;
	?>    
	    
   	</div>

<?php
endif;
wp_reset_postdata();
?>




  