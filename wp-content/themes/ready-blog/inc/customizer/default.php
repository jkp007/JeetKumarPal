<?php
/**
 * Default theme options.
 *
 * @package Ready Blog
 */

if ( ! function_exists( 'ready_blog_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function ready_blog_get_default_theme_options() {

	$defaults = array();

	//General Section
	$defaults['readmore_text']					= esc_html__('Continue Reading','ready-blog');
	$defaults['excerpt_length']					= 20;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'no-sidebar';
	$defaults['layout_options_page']			= 'no-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']					= esc_html__( 'Copyright &copy; All rights reserved.', 'ready-blog' );

	// Pass through filter.
	$defaults = apply_filters( 'ready_blog_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'ready_blog_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function ready_blog_get_option( $key ) {

		$default_options = ready_blog_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;