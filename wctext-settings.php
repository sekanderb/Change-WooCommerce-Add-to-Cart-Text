<?php

/*
 * Add all your sections, fields and settings during admin_init
 */
 
function wc_text_change_init() {
	// Add the section to reading settings so we can add our fields to it
	add_settings_section(
		'single_button_text',
		'Add To Cart Button Text For Single Page',
		'single_button_desc',
		'reading'
	);

	add_settings_section(
		'archive_button_text',
		'Add To Cart Button Text For Archive Pages',
		'archive_page_desc',
		'reading'

	);
	 
	// Add the field with the names and function to use for our new settings, put it in our new section
	add_settings_field(
		'single_button_text',
		'Single Page : All Product',
		'for_single_page_button',
		'reading',
		'single_button_text'
	);
	

	add_settings_field(
		'simple_archive_button_text',
		'Simple Product',
		'for_archive_page_simple_button',
		'reading',
		'archive_button_text'
	);

	add_settings_field(
		'variable_button_text',
		'Variable Product',
		'for_archive_page_variable_button',
		'reading',
		'archive_button_text'
	);

	add_settings_field(
		'grouped_button_text',
		'Grouped Product',
		'for_archive_page_Grouped_button',
		'reading',
		'archive_button_text'
	);

	add_settings_field(
		'external_button_text',
		'External Product',
		'for_archive_page_external_button',
		'reading',
		'archive_button_text'
	);
	 
	// Register our setting in the "reading" settings section
	register_setting( 'reading', 'single_button_text' );
	register_setting( 'reading', 'simple_button_text' );
	register_setting( 'reading', 'variable_button_text' );
	register_setting( 'reading', 'grouped_button_text' );
	register_setting( 'reading', 'external_button_text' );
}
 
add_action( 'admin_init', 'wc_text_change_init' );
 
/*
 * Settings section callback function
 */
 
function single_button_desc() {
	echo '<p>Below text will replace the WooCommerce texts in frontend.</p>';
}

function archive_page_desc(){
	echo "<p>Below text will replace the Add to Cart button text in archive pages: Category, Tags etc.";
}
 
/*
 * Callback function for our example setting
 */
 
function for_single_page_button() {
	$single = esc_attr( get_option( 'single_button_text' ) );
	echo "<input type='text' name='single_button_text' value='$single' />";
}

function for_archive_page_simple_button(){
	$simple = esc_attr( get_option( 'simple_button_text' ) );
	echo "<input type='text' name='simple_button_text' value='$simple' />";
}

function for_archive_page_variable_button(){
	$variable = esc_attr( get_option( 'variable_button_text' ) );
	echo "<input type='text' name='variable_button_text' value='$variable' />";
}

function for_archive_page_external_button(){
	$external = esc_attr( get_option( 'external_button_text' ) );
	echo "<input type='text' name='external_button_text' value='$external' />";
}

function for_archive_page_grouped_button(){
	$grouped = esc_attr( get_option( 'grouped_button_text' ) );
	echo "<input type='text' name='grouped_button_text' value='$grouped' />";
}

?>
