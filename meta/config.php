<?php

add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );

function yourprefix_register_demo_metabox() {
    
    $cmb_demo = new_cmb2_box( array(
		'id'            => 'yourprefix_demo_metabox',
		'title'         => esc_html__( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'page' ), 
	) );
    
    
    $cmb_demo->add_field( array(
		'name'       => esc_html__( 'Test Text', 'cmb2' ),
		'desc'       => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'         => 'yourprefix_demo_text',
		'type'       => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
}