<?php
function create_taxonomy_link() {
    $args = array(
      'public' => true,
      'label'  => 'Links',
      'supports' => ['title', 'thumbnail'],
      'taxonomies' => array('post_tag')
    );
    register_post_type( 'link', $args );
}
add_action( 'init', 'create_taxonomy_link' );

function url_meta_box_form() {
    global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'url_fields' );
	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'url', true );
	// Output the field
	echo '<input type="text" name="url" value="' . esc_textarea( $url )  . '" class="widefat">';
}

function url_meta_box_add() {

    add_meta_box( 'url-meta-box', 'URL', 'url_meta_box_form', 'link', 'normal', 'high' );

}

add_action( 'add_meta_boxes', 'url_meta_box_add' );


// function create_taxonomy_link() {
 
// 	register_taxonomy(
// 		     'links',
// 		     'post',
// 		      array(
// 			     'label' => 'Links',
// 			     'rewrite' => array( 'slug' => 'link' ),
//                  'hierarchical' => false,
                 
// 		     )
// 	);
// }
 
// add_action( 'init', 'create_taxonomy_link' );