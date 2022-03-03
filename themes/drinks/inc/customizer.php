<?php
/**
 * Love for Drinks Theme Customizer
 *
 * @package Love_for_Drinks
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function drinks_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'drinks_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'drinks_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->( 'drinks_social_media', array(
		'title' => esc_html__( 'Social Media', 'drinks' ),
	) );

	$wp_customize->
}
add_action( 'customize_register', 'drinks_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function drinks_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function drinks_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function drinks_customize_preview_js() {
	wp_enqueue_script( 'drinks-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), DRINKS_VERSION, true );
}
add_action( 'customize_preview_init', 'drinks_customize_preview_js' );
