<?php 
/* Create the custom metabox 
 *add_meta_box( string $id, string $title, callable $callback, string|array|WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callback_args = null )
 */
function spinybabbler_slider_metabox(){

    add_meta_box(
        'spinybabbler-Slider',
        __( 'Second Title', 'spinybabbler' ),
        'spinybabbler_slider_metabox_content',
        'Slider',
        'advanced',
        'high'
    );
    add_meta_box(
        'spinybabbler-About',
        __( 'About Title', 'spinybabbler' ),
        'spinybabbler_about_metabox_content',
        'page',
        'advanced',
        'high'
    );
    add_meta_box( 
        'spinybabbler-service-icon',
        __( 'Select icon', 'spinybabbler' ),
        'spinybabbler_service_metabox_content',
        'service',
        'advanced',
        'high'
     );
    add_meta_box( 
        'spinybabbler-team-postion',
        __( 'Postion', 'spinybabbler' ),
        'spinybabbler_team_metabox_content',
        'team',
        'advanced',
        'high'
     );


}
add_action("add_meta_boxes", "spinybabbler_slider_metabox");

/* Add field to meta box content
 * get_post_meta( int $post_id, string $key = '', bool $single = false )
 */
function spinybabbler_slider_metabox_content($post_id){
	global $post; // display the current fost data
    $value = get_post_meta($post->ID, "spinybabbler_slider_meta_field", true);

    echo '<input type="text" size="120" name="spinybabbler_slider_meta_field" value="'. $value.'">';
 }
function spinybabbler_about_metabox_content($post_id){
    global $post; // display the current fost data
    $value = get_post_meta($post->ID, "spinybabbler_about_meta_field", true);

    echo '<input type="text" size="120" name="spinybabbler_about_meta_field" value="'. $value.'">';
 }
 function spinybabbler_service_metabox_content($post_id){
    global $post; // display the current fost data
    $value = get_post_meta($post->ID, "spinybabbler_service_meta_field", true);

    echo'<style>
    .spiny_font{
        font-family: Flaticon;
    }
</style>
    <select  class="spiny_font" name="spinybabbler_service_meta_field">
     <option value="flaticon-001-blog"> Select Any One</option>
     <option value="flaticon-001-blog"> &#xf100; flaticon-001-blog</option>
     <option value="flaticon-002-browser"> &#xf101; flaticon-002-browser</option>
     <option value="flaticon-032-web-design-1"> &#xf11f; flaticon-032-web-design-1</option>
     <option value="flaticon-009-web-design"> &#xf108; flaticon-009-web-design</option>
     <option value="flaticon-015-folder-management"> &#xf10e; fflaticon-015-folder-management</option>
     <option value="flaticon-014-feature"> &#xf10d; flaticon-014-feature</option>
     <option value="flaticon-012-mockup"> &#xf10b; flaticon-012-mockup</option>
     <option value="flaticon-017-gallery"> &#xf110; flaticon-017-gallery</option>
     <option value="flaticon-024-planning"> &#xf117; flaticon-024-planning</option>
     <option value="flaticon-021-mobile-app"> &#xf114; flaticon-021-mobile-app</option>
     <option value="flaticon-034-online-shop"> &#xf121; flaticon-034-online-shop</option>
    </select>';
 
 }

 function spinybabbler_team_metabox_content($post_id){
    global $post; // display the current fost data
    $value = get_post_meta($post->ID, "spinybabbler_team_meta_field", true);

    echo '<input type="text" size="120" name="spinybabbler_team_meta_field" value="'. $value.'">';
 }
 /*listen to save post hook and update value(when you click update post from admin panel
  *
  */

 function on_save_post($post_id){
    global $post; // display the current fost data
    $meta_value = isset($_POST["spinybabbler_slider_meta_field"]) ?  $_POST["spinybabbler_slider_meta_field"]  : false;
    if (current_user_can("edit_posts") && $meta_value){
        update_post_meta($post->ID,"spinybabbler_slider_meta_field", $meta_value);
    }
    $meta_about = isset($_POST["spinybabbler_about_meta_field"]) ? $_POST["spinybabbler_about_meta_field"]  :   false;
    if (current_user_can("edit_posts") && $meta_about){
        update_post_meta($post->ID,"spinybabbler_about_meta_field", $meta_about);
    }
    $meta_service=isset($_POST["spinybabbler_service_meta_field"]) ? $_POST["spinybabbler_service_meta_field"] : false;
    if (current_user_can( "edit_posts" ) && $meta_service){
        update_post_meta( $post->ID, "spinybabbler_service_meta_field", $meta_service);
    }
    $meta_team=isset($_POST["spinybabbler_team_meta_field"]) ? $_POST["spinybabbler_team_meta_field"] : false;
    if (current_user_can( "edit_posts" ) && $meta_team){
        update_post_meta( $post->ID, "spinybabbler_team_meta_field", $meta_team);
    }
 }
 add_action("save_post", "on_save_post");