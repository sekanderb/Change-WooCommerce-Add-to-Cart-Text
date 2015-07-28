<?php

/*
Plugin Name: Change WooCommerce Add to Cart Text
Plugin URI: https://github.com/badsha-eee/Change-WooCommerce-Add-to-Cart-Text/
Description: This plugin helps you to change the "Add To Cart" button text to anything from a simple settings page available in wp-admin → Settings → Reading
Author: Sekander Badsha
Author URI: http://sekander.pro 
Version: 0.1
*/

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );

function woo_custom_cart_button_text() {
	//this text will be displayed on the single product page
        return __( $options = get_option( 'single_button_text', false ), 'wctext' );
 
}

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( $options = get_option( 'external_button_text', false ), 'wctext' );
		break;
		case 'grouped':
			return __( $options = get_option( 'grouped_button_text', false ), 'wctext' );
		break;
		case 'simple':
			return __( $options = get_option( 'simple_button_text', false ), 'wctext' );
		break;
		case 'variable':
			return __( $options = get_option( 'variable_button_text', false ), 'wctext' );
		break;
		default:
			return __( 'Read More', 'wctext' );
	}
	
}

include_once 'wctext-settings.php';

?>
