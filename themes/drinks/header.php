<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Love_for_Drinks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'drinks' ); ?></a>
<div id="page" class="site">

	<!-- This is the site header for navigation inside of it. -->
	<header id="masthead" class="site-header">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="site-branding cell small-12 medium-2">
					<?php
						/** 
						 * Load the site logo if uploaded to the customizer.
						*/
						if ( ! empty (has_custom_logo() ) ) {
							the_custom_logo();
						} else {
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$drinks_description = get_bloginfo( 'description', 'display' );
						if ( $drinks_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $drinks_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php 
						endif; 
						}
					?>
				</div><!-- .site-branding -->

				<!-- This is the site navigation menu. -->
				<nav id="site-navigation" class="main-navigation cell small-12 medium-10" style="justify-self: end;">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><?php esc_html_e( '', '' ); ?></button> -->
					<div class="menu-toggle">
						<input type="checkbox">

						<span></span>
						<span></span>
						<span></span>

						<?php
						/**
						 * Only print Primary menu if created and location set. 
						 */
						if ( has_nav_menu( 'menu-primary' ) ){
							wp_nav_menu(
								array(
									'theme_location' => 'menu-primary',
									'menu_id'        => 'primary-menu',
								)
							);
						}
						?>
					</div>
				</nav><!-- #site-navigation -->
			</div> <!-- grid-x grid-margin-x grid-margin-y -->
		</div> <!-- grid-container -->
	</header><!-- #masthead -->

