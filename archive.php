<?php

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'grid-archive';
	return $classes;
	
}

//remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );
//remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );
//remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// ENTRY-HEADER
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

// ENTRY-CONTENT
add_action( 'genesis_entry_content', 'genesis_do_post_title' );
//add_action( 'genesis_entry_content', 'genesis_post_meta' );

genesis();