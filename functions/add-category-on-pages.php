<?php
function wptp_add_category_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init' , 'wptp_add_category_to_pages' );