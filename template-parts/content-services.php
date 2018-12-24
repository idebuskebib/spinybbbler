
					<div class="col-md-8">
						<div class="row">
							<div class="wrap">
								<?php 
								    $args = array(
								                 'post_type'=>'service',
								                 'posts_per_page'=>2
								                  );
								    $query = new WP_Query($args);
								    $i=1;
									if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
											$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
					                    	$url = $thumb[0]; 

									?>
									
								<div class="col-md-6 animate-box">
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
								  wp_reset_postdata();
								  ?>
							</div>
						</div>
						<div class="row">
							<div class="wrap">
								<?php 
								    $args = array(
								                 'post_type'=>'service',
								                 'posts_per_page'=>2,
								                 'offset'=> 2
								                  );
								    $query = new WP_Query($args);
								    $i=1;
									if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
											$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
					                    	$url = $thumb[0]; 
									?>
								<div class="col-md-6 animate-box">
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
								  wp_reset_postdata();
								  ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="wrap">
								<?php 
								    $args = array(
								                 'post_type'=>'service',
								                 'posts_per_page'=>3,
								                 'offset'=> 4
								                  );
								    $query = new WP_Query($args);
								    $i=1;
									if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
											$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
					                    	$url = $thumb[0]; 
									?>
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
								  wp_reset_postdata();
								  ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="wrap">
								<?php 
								    $args = array(
								                 'post_type'=>'service',
								                 'posts_per_page'=>3,
								                 'offset'=> 7
								                  );
								    $query = new WP_Query($args);
								    $i=1;
									if($query->have_posts()):while($query->have_posts()):$query->the_post(); 
											$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');
					                    	$url = $thumb[0]; 
									?>
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
								  wp_reset_postdata();
								  ?>
							</div>
						</div>
					</div>	

					