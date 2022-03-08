<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Love_for_Drinks
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="custom-footer-row">
			<?php if ( is_active_sidebar( 'footer-area-column-1' ) ) : ?>
                <div class="footer-area-column-1">
                    <?php dynamic_sidebar( 'footer-area-column-1' ); ?>
                </div>
            <?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-area-column-2' ) ) : ?>
                <div class="footer-area-column-2">
                    <?php dynamic_sidebar( 'footer-area-column-2' ); ?>
                </div>
            <?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-area-column-3' ) ) : ?>
                <div class="footer-area-column-3">
                    <?php dynamic_sidebar( 'footer-area-column-3' ); ?>
                </div>
            <?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-area-column-4' ) ) : ?>
                <div class="footer-area-column-4">
                    <?php dynamic_sidebar( 'footer-area-column-4' ); ?>
                </div>
            <?php endif; ?>
		</div>
		<div class="site-info">
			<?php
				/* translators: 1: Copyright, 2: Site. */
				printf( esc_html__( 'Theme by Wordpress | Copyright %1$s by %2$s.', 'drinks' ), '2022', '<a href=" ' . home_url() . ' ">Le palais des liqueuers</a> | <a href=" ' . home_url() . '/privacy-policy"> Privacy Policy </a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
