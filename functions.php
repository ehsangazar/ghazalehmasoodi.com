<?php
/**
 * Influencer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Influencer
 */

// Define theme version
if ( !defined( 'INFLUENCER_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();
	define ( 'INFLUENCER_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-functions.php';
/**
 * Sidebar Metabox for this theme.
 */
require get_template_directory() . '/inc/metabox.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Additional helper codes.
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Widgets codes.
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * Additional helper codes.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
/**
 * Add theme compatibility function for WooCommerce if active
*/
if( influencer_is_woocommerce_activated() ){
    require get_template_directory() . '/inc/woocommerce-functions.php';    
}
/**
 * Plugin Recommendation
*/
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * raratheme companion filters
 */
if( influencer_is_irtc_activated() ){
	require get_template_directory() . '/inc/rtc-filters.php';
}