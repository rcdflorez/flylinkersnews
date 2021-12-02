<?php
/*Plugin Name: bS Grid
Plugin URI: https://bootscore.me/plugins/bs-grid/
Description: Displays posts from category, child pages from parent id or custom post types by parent taxonomy id in your post or page via shortcode.
Version: 5.1.0.0
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
*/

// Update checker
require 'update/update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://bootscore.me/wp-content/plugins/bs-grid-main/update/plugin.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'bs-grid-main'
);


/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs-grid-main/$template_name
 * 2. /themes/theme/$template_name
 * 3. /plugins/bs-grid-main/templates/$template_name.
 *
 * @since 1.0.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_grid_locate_template( $template_name, $template_path = '', $default_path = '' ) {

	// Set variable to search in bs-grid folder of theme.
	if ( ! $template_path ) :
		$template_path = 'bs-grid-main/';
	endif;

	// Set default plugin templates path.
	if ( ! $default_path ) :
		$default_path = plugin_dir_path( __FILE__ ) . 'templates/'; // Path to the template folder
	endif;

	// Search template file in theme folder.
	$template = locate_template( array(
		$template_path . $template_name,
		$template_name
	) );

	// Get plugins template file.
	if ( ! $template ) :
		$template = $default_path . $template_name;
	endif;

	return apply_filters( 'bs_grid_locate_template', $template, $template_name, $template_path, $default_path );

}


/**
 * Get template.
 *
 * Search for the template and include the file.
 *
 * @since 1.0.0
 *
 * @see bs_grid_locate_template()
 *
 * @param string 	$template_name			Template to load.
 * @param array 	$args					Args passed for the template file.
 * @param string 	$string $template_path	Path to templates.
 * @param string	$default_path			Default path to template files.
 */
function bs_grid_get_template( $template_name, $args = array(), $tempate_path = '', $default_path = '' ) {

	if ( is_array( $args ) && isset( $args ) ) :
		extract( $args );
	endif;

	$template_file = bs_grid_locate_template( $template_name, $tempate_path, $default_path );

	if ( ! file_exists( $template_file ) ) :
		_doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $template_file ), '1.0.0' );
		return;
	endif;

	include $template_file;

}


/**
 * Templates.
 *
 * This func tion will output the templates
 * file from the /templates.
 *
 * @since 1.0.0
 */

function bs_post_page_grid() {

	return bs_grid_get_template( 'sc-grid.php' );

}
add_action('wp_head', 'bs_post_page_grid');


function bs_post_page_list() {

    return bs_grid_get_template( 'sc-list.php' );

}
add_action('wp_head', 'bs_post_page_list');
