<?php
/**
 * Functions to add to the header.
 *
 * @link  https://ajaydsouza.com
 * @since 1.2.0
 *
 * @package	Add_to_All
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Function to add custom code to the header. Filters `wp_head`.
 */
function ald_ata_header() {

	global $ata_settings;

	$ata_other = stripslashes( $ata_settings['head_other_html'] );
	$ata_head_css = stripslashes( $ata_settings['head_css'] );
	$ata_tynt_id = stripslashes( $ata_settings['tynt_id'] );

	// Add CSS to header.
	if ( '' !== $ata_head_css ) {
		echo '<style type="text/css">' . $ata_head_css . '</style>'; // WPCS: XSS OK.
	}

	// Add Tynt.
	ata_tynt( $ata_tynt_id );

	// Add other header.
	if ( '' !== $ata_other ) {
		echo $ata_other; // WPCS: XSS OK.
	}

}
add_action( 'wp_head', 'ald_ata_header' );


