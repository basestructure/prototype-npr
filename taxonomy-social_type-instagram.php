<?php
/* --------------------------------------------------------------------------------------------
 * Do not edit the next 3 lines
 * ----------------------------------------------------------------------------------------- */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'grid-archive grid-all grid-archive-2col';
	return $classes;
//	
}

//* Replacing excerpt with summary
add_filter('the_excerpt', 'your_function_name');
function your_function_name($excerpt) {
    // ALT_SUMMARY
    $swp_field = get_post_meta( get_the_ID(), "alt_summary", TRUE );
    if ( $swp_field ) {
        ?><div class="item-summary"><?php echo $swp_field; ?></div><?php
    }

}

// DISPLAY SOCIAL HEADER
function swp_social_heading() {
	?><div class="fontsize-xlrg fontweight-bold archive-description">Social Type: Instagram</div><?php
}
//add_action( 'genesis_before_loop', 'swp_social_heading' );

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// ENTRY-HEADER
	//	add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

// ENTRY-CONTENT
//		add_action( 'genesis_entry_content', 'genesis_do_post_title' );
	//	add_action( 'genesis_entry_content', 'genesis_do_post_content' );
//add_action( 'genesis_entry_content', 'genesis_post_meta' );
//		remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
		
add_action( 'genesis_entry_content', 'swp_manipulation' );
function swp_manipulation() {
    global $use_this_id;
    
    $use_this_id = get_the_ID();
    
    //echo 'ID: '.$use_this_id.'<br />';
    //echo 'Title: '.get_the_title().'<br />';
    //echo 'Social Type: '.get_the_terms( $sid, 'social_type' )[0]->name.'<br />';

    //echo '<div class="fontsize-xxxsml fontweight-semibold bgcolor-lightest spacein-xsml spacein-sml-left"><a href="'.get_the_permalink( $use_this_id ).'">'.get_the_title().'</a></div>';
    // attachment (featured image)
    echo '<span class="dashicons dashicons-instagram"></span>';
    $swp_field = get_the_post_thumbnail( $use_this_id, 'medium-large' );
    if ( $swp_field ) {
        ?><div class="item-pic"><a href="<?php echo get_the_permalink( $use_this_id ); ?>"><?php echo $swp_field; ?></a></div><?php
    }

    // custom field (PIC)
    /*
    $swp_field = get_post_meta( $use_this_id, "pic", TRUE );
	if ( $swp_field ) {
		?><div class="item-pic"><a href="<?php echo get_the_permalink( $use_this_id ); ?>"><?php echo wp_get_attachment_image( $swp_field, $size = "medium-large", $icon = false ); ?></a></div><?php
	}
    */

    /*
    $filename = 'mediaobject-social.php';
    
    ob_start();
    include get_stylesheet_directory_uri() . '/swp_template/views/'.$filename;
    return ob_get_clean();
    */
}

genesis();