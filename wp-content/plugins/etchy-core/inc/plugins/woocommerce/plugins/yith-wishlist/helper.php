<?php

if ( ! function_exists( 'etchy_core_include_yith_wishlist_plugin_is_installed' ) ) {
	/**
	 * Function that set case is installed element for framework functionality
	 *
	 * @param bool $installed
	 * @param string $plugin - plugin name
	 *
	 * @return bool
	 */
	function etchy_core_include_yith_wishlist_plugin_is_installed( $installed, $plugin ) {
		if ( $plugin === 'yith-wishlist' ) {
			return defined( 'YITH_WCWL' );
		}
		
		return $installed;
	}
	
	add_filter( 'qode_framework_filter_is_plugin_installed', 'etchy_core_include_yith_wishlist_plugin_is_installed', 10, 2 );
}

if ( ! function_exists( 'etchy_core_get_yith_wishlist_shortcode' ) ) {
	function etchy_core_get_yith_wishlist_shortcode() {
		if ( qode_framework_is_installed( 'yith-wishlist' ) ) {
			echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
		}
	}
}