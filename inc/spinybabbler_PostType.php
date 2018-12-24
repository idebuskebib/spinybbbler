<?php
function  spinybabbler_create_post_type(){
		$args = array(
		      'public' => true,
		      'hierarchical'=>true,
		      'label'  => 'Sliders',
		      'supports'           => array( 'title','editor','author','thumbnail','excerpt','comments' ),
		      'capability_type'    => 'post',
		      'menu_position'      => 20,
		      'menu_icon'           => 'dashicons-screenoptions',

		    );
    	register_post_type( 'slider', $args );
    	$args = array(
		      'public' => true,
		      'hierarchical'=>true,
		      'label'  => 'Projects',
		      'supports'           => array( 'title','editor','author','thumbnail','excerpt','comments' ),
		      'capability_type'    => 'post',
		      'menu_position'      => 21,
		      'menu_icon'           => 'dashicons-products',

		    );
    	register_post_type( 'project', $args );
    	$args = array(
		      'public' => true,
		      'hierarchical'=>true,
		      'label'  => 'Services',
		      'supports'           => array( 'title','editor','author','thumbnail','excerpt','comments' ),
		      'capability_type'    => 'post',
		      'menu_position'      => 22,
		      'menu_icon'           => 'dashicons-networking',

		    );
    	register_post_type( 'service', $args );
    	$args = array(
		      'public' => true,
		      'hierarchical'=>true,
		      'label'  => 'Teams',
		      'supports'           => array( 'title','editor','author','thumbnail','excerpt','comments' ),
		      'capability_type'    => 'post',
		      'menu_position'      => 23,
		      'menu_icon'           => 'dashicons-businessman',

		    );
    	register_post_type( 'Team', $args );
    	$args = array(
		      'public' => true,
		      'hierarchical'=>true,
		      'label'  => 'Testimonials',
		      'supports'           => array( 'title','editor','author','thumbnail','excerpt','comments' ),
		      'capability_type'    => 'post',
		      'menu_position'      => 24,
		      'menu_icon'           => 'dashicons-groups',

		    );
    	register_post_type( 'testi', $args );

}
add_action('init','spinybabbler_create_post_type');
add_action( 'init', 'spinybabbler_tax' );

function spinybabbler_tax() {
	// 	register_taxonomy(
	// 			'sliders',
	// 			'slider',
	// 			array(
	// 				'label' => __( 'Display' ),
	// 				'rewrite' => array( 'slug' => 'slider' ),
	// 				'hierarchical' => true,
	// 				'show_ui'           => true,
	// 	            'show_admin_column' => true,
	// 	            'query_var'         => true,
	// 			)
	// 		);
	// register_taxonomy(
	// 	'mnu_cat',
	// 	'menus',
	// 	array(
	// 		'label' => __( 'Category' ),
	// 		'rewrite' => array( 'slug' => 'mnu_cats' ),
	// 		'hierarchical' => true,
	// 		'show_ui'           => true,
	// 	    'show_admin_column' => true,
	// 	    'query_var'         => true,
	// 	)
	// );
	
	// register_taxonomy(
	// 	'trips',
	// 	'trip',
	// 	array(
	// 		'label' => __( 'Display location' ),
	// 		'rewrite' => array( 'slug' => 'trip' ),
	// 		'hierarchical' => true,
	// 	)
	// );
	// register_taxonomy(
	// 	'country',
	// 	'trip',
	// 	array(
	// 		'label' => __( 'Countries' ),
	// 		'rewrite' => array( 'slug' => 'country' ),
	// 		'hierarchical' => true,
	// 		'show_ui'           => true,
	// 		'show_admin_column' => true,
	// 		'query_var'         => true,
			
	// 	)
	// );
	// register_taxonomy(
	// 	'sliders',
	// 	'slider',
	// 	array(
	// 		'label' => __( 'Display' ),
	// 		'rewrite' => array( 'slug' => 'slider' ),
	// 		'hierarchical' => true,
	// 	)
	// );
}