<?php
/**
 * Spiny Babbler Theme Customizer.
 *
 * @package spinybabbler
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Spiny_babbler_customize_registers( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

	 	/* Panel with the setting to control the front page */
      	$wp_customize->add_panel( 'spinybabbler_home_panel', array(
                            'priority'       => 10,
                            'capability'     => 'edit_theme_options',
                            'title'          => __('Spiny Babbler Home Page','spinybabbler'),
                        ) );
      			/* Adding customization for About sections */
                $wp_customize->add_section('spiny_babbler_about_section' , array(
		                'title'                     => __('About Section','spinybabbler'),
		                'priority'                  => 1,
		                'panel'  					=> 'spinybabbler_home_panel'
		        ) );
			        $wp_customize->add_setting('spiny_babbler_about_years_text', array(
			                'default'                   => __('10','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_about_years_text', array(
			               'label'                      =>__('Add the number of years','spinybabbler'),
			               'section'                    => 'spiny_babbler_about_section',
			               'type'                       => 'text',
			        ));
			        $wp_customize->add_setting('spiny_babbler_about_welcomesm_text', array(
			                'default'                   => __('Welcome!','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_about_welcomesm_text', array(
			               'label'                      =>__('Enter Small welcome text','spinybabbler'),
			               'section'                    => 'spiny_babbler_about_section',
			               'type'                       => 'text',
			        ));
			        $wp_customize->add_setting('spiny_babbler_about_welcomethin_text', array(
			                'default'                   => __('Secrets of Success','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_about_welcomethin_text', array(
			               'label'                      =>__('Enter Thin welcome text','spinybabbler'),
			               'section'                    => 'spiny_babbler_about_section',
			               'type'                       => 'text',
			        ));
			        $wp_customize->add_setting('spiny_babbler_about_welcomethick_text', array(
			                'default'                   => __('of Our Projects','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_about_welcomethick_text', array(
			               'label'                      =>__('Enter Thick welcome text','spinybabbler'),
			               'section'                    => 'spiny_babbler_about_section',
			               'type'                       => 'text',
			        ));
			        $wp_customize->add_setting('spiny_babbler_about_welcomearticle_text', array(
			                'default'                   => __('Since 2008 Spiny babbbler....','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_about_welcomearticle_text', array(
			               'label'                      =>__('Enter Short paragraph on About us','spinybabbler'),
			               'section'                    => 'spiny_babbler_about_section',
			               'type'                       => 'textarea',
			        ));
               /* End of  About Section text*/
               /* Start of services Sections*/
                $wp_customize->add_section('spiny_babbler_Services_section' , array(
		                'title'                     => __('Services Section','spinybabbler'),
		                'priority'                  => 2,
		                'panel'  					=> 'spinybabbler_home_panel'
		        ) );
                	$wp_customize->add_setting('spiny_babbler_services_text', array(
			                'default'                   => __('Making answers for every real industry, our workforce endeavors to make an impactful web presence.','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_services_text', array(
			               'label'                      =>__('Enter Short intro on services','spinybabbler'),
			               'section'                    => 'spiny_babbler_Services_section',
			               'type'                       => 'textarea',
			        ));
			        $wp_customize->add_setting('spiny_babbler_serviceslink_text', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control('spiny_babbler_serviceslink_text', array(
			               'label'                      =>__('Enter link to on services page','spinybabbler'),
			               'section'                    => 'spiny_babbler_Services_section',
			               'type'                       => 'text',
			        ));
			         /* End of services Sections*/
			         /* Start of Project Sections*/
			    $wp_customize->add_section('spiny_babbler_Projects_section' , array(
		                'title'                     => __('Projects Section','spinybabbler'),
		                'priority'                  => 3,
		                'panel'  					=> 'spinybabbler_home_panel'
		        ) );
			    	$wp_customize->add_setting('spiny_babbler_project_text', array(
			                'default'                   => __('We have best team in work which leads to best output which is not possiable without great services.','spinybabbler'),
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_project_text', array(
			               'label'                      =>__('Enter Short intro on Projects','spinybabbler'),
			               'section'                    => 'spiny_babbler_Projects_section',
			               'type'                       => 'textarea',
			        ));
                     $wp_customize->add_setting('spiny_babbler_projectlink_text', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control('spiny_babbler_projectlink_text', array(
			               'label'                      =>__('Enter link to on projects page','spinybabbler'),
			               'section'                    => 'spiny_babbler_Projects_section',
			               'type'                       => 'text',
			        ));

			        /* End of Project Sections*/

			        /* Start of the page banner image*/
			    $wp_customize->add_section('spiny_babbler_page_banner_image_section' , array(
		                'title'                     => __('Banner Images','spinybabbler'),
		                'priority'                  => 10,
		                'panel'  					=> 'spinybabbler_home_panel'
		        ) );

		        	$wp_customize->add_setting('spiny_babbler_About_image', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'spiny_babbler_About_image', array(
			               'label'                      =>__('Select the cover image for About page','spinybabbler'),
			               'section'                    => 'spiny_babbler_page_banner_image_section'
			        )));
			        $wp_customize->add_setting('spiny_babbler_service_image', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'spiny_babbler_service_image', array(
			               'label'                      =>__('Select the cover image for service page','spinybabbler'),
			               'section'                    => 'spiny_babbler_page_banner_image_section'
			        )));
			       
			         $wp_customize->add_setting('spiny_babbler_project_image', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'spiny_babbler_project_image', array(
			               'label'                      =>__('Select the cover image for Project page','spinybabbler'),
			               'section'                    => 'spiny_babbler_page_banner_image_section'
			        )));
			        $wp_customize->add_setting('spiny_babbler_Blog_image', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'spiny_babbler_Blog_image', array(
			               'label'                      =>__('Select the cover image for Blog page','spinybabbler'),
			               'section'                    => 'spiny_babbler_page_banner_image_section'
			        )));
			        $wp_customize->add_setting('spiny_babbler_contact_image', array(
			                'default'                   => __('#','spinybabbler'),
			                'sanitize_callback'         => 'esc_url_raw',
			        ) );
			        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'spiny_babbler_contact_image', array(
			               'label'                      =>__('Select the cover image for Contact page','spinybabbler'),
			               'section'                    => 'spiny_babbler_page_banner_image_section'
			        )));
                       

			        /* End of the page banner image*/
 
			        /*Start of footer Sections*/
				$wp_customize->add_section('spiny_babbler_footer_section' , array(
		                'title'                     => __('Footer section','spinybabbler'),
		                'priority'                  => 10,
		                'panel'  					=> 'spinybabbler_home_panel'
		        ) );
		        	 $wp_customize->add_setting('spiny_babbler_footer_text', array(
		                'default'                   => '',
		                'sanitize_callback'         => 'spiny_babbler_sanitize_copyright',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_footer_text', array(
		               'label'                      =>__('Enter copyright Text','spinybabbler'),
		               'section'                    => 'spiny_babbler_footer_section',
		               'type'                       => 'text',
		        	));
		       		$wp_customize->add_section('spiny_babbler_Contactandsocial_section' , array(
		                'title'                     => __('Contact and Social section','spinybabbler'),
		                'priority'                  => 10,
		                'panel'  					=> 'spinybabbler_home_panel'
		        	) );
			        $wp_customize->add_setting('spiny_babbler_address', array(
			                'default'                   => 'Shiva Marga,Mahalaxmi Nagar-2,Lalitpur',
			                'sanitize_callback'         => 'sanitize_text_field',
			        ) );
			        $wp_customize->add_control('spiny_babbler_address', array(
			               'label'                      =>__('Enter Your Address','spinybabbler'),
			               'section'                    => 'spiny_babbler_Contactandsocial_section',
			               'type'                       => 'text',
			        ));
			        $wp_customize->add_setting('spiny_babbler_phone', array(
		                'default'                   => '+977-986152447',
		                'sanitize_callback'         => 'sanitize_text_field',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_phone', array(
		               'label'                      =>__('Enter Your phone','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_email', array(
		                'default'                   => 'spinybabblerit@gmail.com',
		                'sanitize_callback'         => 'sanitize_email',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_email', array(
		               'label'                      =>__('Enter Your phone','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_web', array(
		                'default'                   => 'http://spinybabbler.com.np/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_web', array(
		               'label'                      =>__('Enter Your web address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_facebook', array(
		                'default'                   => 'https://facebook.com/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_facebook', array(
		               'label'                      =>__('Enter Your Facebook address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_twitter', array(
		                'default'                   => 'https://twitter.com/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_twitter', array(
		               'label'                      =>__('Enter Your twitter address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_linkedin', array(
		                'default'                   => 'https://linkedin.com/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_linkedin', array(
		               'label'                      =>__('Enter Your linkedin address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_skype', array(
		                'default'                   => 'https://skype.com/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_skype', array(
		               'label'                      =>__('Enter Your skype address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        	$wp_customize->add_setting('spiny_babbler_pinterest', array(
		                'default'                   => 'https://www.pinterest.com/',
		                'sanitize_callback'         => 'esc_url_raw',
		        	) );
		        	$wp_customize->add_control('spiny_babbler_pinterest', array(
		               'label'                      =>__('Enter Your pinterest address','spinybabbler'),
		               'section'                    => 'spiny_babbler_Contactandsocial_section',
		               'type'                       => 'text',
		        	));
		        /* End of footer Sections*/
}
add_action( 'customize_register', 'Spiny_babbler_customize_registers');


function spiny_babbler_customize_preview_js() {
	wp_enqueue_script( 'spiny_babbler_customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'spiny_babbler_customize_preview_js' );


function spiny_babbler_customize_css()
{
    ?>
         <style type="text/css">
             /* h1 { color: <?php //echo get_theme_mod('header_color', '#000000'); ?>; } */
         </style>
    <?php
}
add_action( 'wp_head', 'spiny_babbler_customize_css');

function spiny_babbler_sanitize_copyright( $input ) {
    return wp_strip_all_tags( stripslashes( $input ) );
}