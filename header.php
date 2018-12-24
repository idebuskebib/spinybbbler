<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|',true ,'right');?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head();?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<!-- <div class="spinybab-loader"></div> -->
	<div id="page">
	      <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		   ?>
		<nav class="navbar navbar-expand-lg navbar-light ">
		  	<a class="navbar-brand" href="#"><img src="<?php echo $image[0]; ?>" class="img-responsive" alt="Spiny Babbler"></a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  	</button>
		  	 <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
		  	 	<?php
		  	 	wp_nav_menu(array(
                     'theme_location'=>'primary',
                     'menu_class'=>'navbar-nav ml-auto',
                     'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            		 'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
		                )
		            );     
            	?>
		    	<!-- <ul class="navbar-nav ml-auto">
				    <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="#">Projects</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="#">Services</a>
				    </li>
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Blog
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#">Blog 1</a>
				          <a class="dropdown-item" href="#">Blog 2</a>
				          <a class="dropdown-item" href="#">Blog 3</a>
				        </div>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="#">About</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="#">Contact</a>
				    </li>
		    	</ul> -->
		  </div>
		</nav> 
		