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



	$wp_customize->add_panel( 'drinks_social_media', array(
		'title' => esc_html__( 'Social Media', 'drinks' ),
	) );

	$wp_customize->add_section( 'drinks_facebook', array(
		'title' => esc_html__( 'Facebook', 'drinks' ),
		'panel' => 'drinks_social_media',
	) );

	$wp_customize->add_setting( 'drinks_facebook_title' );

	$wp_customize->add_control( 'drinks_facebook_title', array(
		'label'        => 'Title',
		'description'  => 'Enter your link title',
		'section'      => 'drinks_facebook',
	) );

	$wp_customize->add_setting( 'drinks_facebook_url' );

	$wp_customize->add_control( 'drinks_facebook_url', array(
		'label'        => 'URL',
		'description'  => 'Enter your Facebook profile link',
		'type'	       => 'url',
		'section'      => 'drinks_facebook',
	) );

	$wp_customize->add_setting( 'drinks_facebook_icon' );

	$wp_customize->add_control( new WP_customize_media_control( $wp_customize, 'drinks_facebook_icon', array(
		'label'    => 'Icon',
		'section'  => 'drinks_facebook',
	) ) );

	$wp_customize->add_section( 'drinks_twitter', array(
		'title' => esc_html__( 'Twitter', 'drinks' ),
		'panel' => 'drinks_social_media',
	) );

	$wp_customize->add_setting( 'drinks_twitter_title' );

	$wp_customize->add_control( 'drinks_twitter_title', array(
		'label'        => 'Title',
		'description'  => 'Enter your link title',
		'section'      => 'drinks_twitter',
	) );

	$wp_customize->add_setting( 'drinks_twitter_url' );

	$wp_customize->add_control( 'drinks_twitter_url', array(
		'label'        => 'URL',
		'description'  => 'Enter your Twitter profile link',
		'type'	       => 'url',
		'section'      => 'drinks_twitter',
	) );

	$wp_customize->add_setting( 'drinks_twitter_icon' );

	$wp_customize->add_control( new WP_customize_media_control( $wp_customize, 'drinks_twitter_icon', array(
		'label'    => 'Icon',
		'section'  => 'drinks_twitter',
	) ) );

	$wp_customize->add_section( 'drinks_youtube', array(
		'title' => esc_html__( 'Youtube', 'drinks' ),
		'panel' => 'drinks_social_media',
	) );

	$wp_customize->add_setting( 'drinks_youtube_title' );

	$wp_customize->add_control( 'drinks_youtube_title', array(
		'label'        => 'Title',
		'description'  => 'Enter your link title',
		'section'      => 'drinks_youtube',
	) );

	$wp_customize->add_setting( 'drinks_youtube_url' );

	$wp_customize->add_control( 'drinks_youtube_url', array(
		'label'        => 'URL',
		'description'  => 'Enter your Youtube profile link',
		'type'	       => 'url',
		'section'      => 'drinks_youtube',
	) );

	$wp_customize->add_setting( 'drinks_youtube_icon' );

	$wp_customize->add_control( new WP_customize_media_control( $wp_customize, 'drinks_youtube_icon', array(
		'label'    => 'Icon',
		'section'  => 'drinks_youtube',
	) ) );

	$wp_customize->add_section( 'drinks_instagram', array(
		'title' => esc_html__( 'Youtube', 'drinks' ),
		'panel' => 'drinks_social_media',
	) );

	$wp_customize->add_setting( 'drinks_instagram_title' );

	$wp_customize->add_control( 'drinks_instagram_title', array(
		'label'        => 'Title',
		'description'  => 'Enter your link title',
		'section'      => 'drinks_instagram',
	) );

	$wp_customize->add_setting( 'drinks_instagram_url' );

	$wp_customize->add_control( 'drinks_instagram_url', array(
		'label'        => 'URL',
		'description'  => 'Enter your Instagram profile link',
		'type'	       => 'url',
		'section'      => 'drinks_instagram',
	) );

	$wp_customize->add_setting( 'drinks_instagram_icon' );

	$wp_customize->add_control( new WP_customize_media_control( $wp_customize, 'drinks_instagram_icon', array(
		'label'    => 'Icon',
		'section'  => 'drinks_instagram',
	) ) );


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
