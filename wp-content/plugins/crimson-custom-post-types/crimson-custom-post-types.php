<?php
/*
Plugin Name:  Crimson Custom Post Types
*	Description: Add post types for real wedding style and editorials post
* 	Version:     1.0
*	Author: Acutweb
*/
 
 if(!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
}

 function real_wedding_style_init() {
    // set up Editorials Post labels
    $labels = array(
        'name' => 'Real Wedding Styles',
        'singular_name' => 'Real Wedding Style',
        'add_new' => 'Add New Real Wedding Style',
        'add_new_item' => 'Add New Real Wedding Style',
        'edit_item' => 'Edit Real Wedding Style',
        'new_item' => 'New Real Wedding Style',
        'all_items' => 'All Real Wedding Styles',
        'view_item' => 'View Real Wedding Styles',
        'search_items' => 'Search Real Wedding Styles',
        'not_found' =>  'No Real Wedding Style Found',
        'not_found_in_trash' => 'No Real Wedding Style found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Real Wedding Styles',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
		
    'show_in_rest' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
		
		//'taxonomies'  => array('marker_types'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',
			'post-formats'
        )
    );
    register_post_type( 'realwedding', $args );
    
    // register taxonomy
    register_taxonomy('real_wedding_category', 'realwedding', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'real_wedding_category' )));
	

}
add_action( 'init', 'real_wedding_style_init' );

//making the meta box (Note: meta box != custom meta field)
/* function wpse_add_custom_meta_box() {
   add_meta_box(
       'custom_meta_box',       // $id
       ' Country ',                  // $title
       'show_custom_meta_box',  // $callback
       'realweddings',                 // $page
       'normal',                  // $context
       'high'                     // $priority
   );
}
add_action('add_meta_boxes', 'wpse_add_custom_meta_box'); */

/**
 * Output the HTML for the metabox.
 */
/* function wpt_country_location() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'country' );
	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'country', true );
	// Output the field
	$table = $wpdb->base_prefix .'conlocation';
	$result = $wpdb->get_results('SELECT * FROM ' .$table);
	foreach($result as $res){?>
	<option value=" <?php echo $res->id;?>"><?php	echo $res->locationName;?></option>
	<?php
	}
	?></select>
<?php } */
function editorialauthor_init() {
    // set up Editorials Post labels
    $labels = array(
        'name' => 'Author Editorials Posts',
        'singular_name' => 'Author Editorials Post',
        'add_new' => 'Add New Editorials Post',
        'add_new_item' => 'Add New Editorials Post',
        'edit_item' => 'Edit Editorials Post',
        'new_item' => 'New Author Editorials Post',
        'all_items' => 'All Author Editorials Posts',
        'view_item' => 'View Author Editorials Post',
        'search_items' => 'Search Author Editorials Post',
        'not_found' =>  'No Author Editorials Post Found',
        'not_found_in_trash' => 'No Author Editorials Post found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Editorials Posts',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
       // 'query_var' => 'editorials',
		'menu_icon' => 'dashicons-randomize',
	//	'taxonomies' => array('category', 'post_tag'),
	//'rewrite' => array( 'slug' => 'editorials', 'with_front' => true ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',
			'post-formats'
        )
    );
    register_post_type( 'tips-trends', $args );
    
    // register taxonomy
    register_taxonomy('editorialauthor_category', 'tips-trends', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'editorialauthor-category')));
}
add_action( 'init', 'editorialauthor_init' );
