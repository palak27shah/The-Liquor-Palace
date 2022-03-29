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

    <!-- Widgets added in the footer to make it work dynamically. -->
	<footer id="colophon" class="site-footer">
        <div class="custom-footer-row grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <?php
                    $mixture_args = array(
                        'post_type'     => array( 'drinks_mixture' ),
                        'post_status'   => 'publish',
                        'posts_per_page' => '3',
                    );
                    // The Query
                    $mixture_query = new WP_Query( $mixture_args );

                    // The Loop
                    if ( $mixture_query->have_posts() ) {
                        while ( $mixture_query->have_posts() ) {
                ?>
                    <div class="footer-recent-posts cell small-12 medium-4">
                <?php        
                    $mixture_query->the_post();
                    the_post_thumbnail( 'thumbnail', ['class' => 'recent_posts_featured_image'] );
                ?>
                        <div class="recent_post_details">
                <?php
                    the_title( '<h5><a href="' . get_permalink() . '">', '</a></h5>' );
                    the_excerpt( '<p>', '</p>');
                ?>
                        </div><!-- recent_post_details -->
                    </div> <!-- footer-recent-posts -->
                <?php
                    }
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
        <?php   // Conditional tag to display site footer on certain pages only
            if( is_singular() ) {
                if( !is_page('contact') ) {
        ?>
            <div class="custom-footer-row grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <!-- Footer column-1 - Made for quick links(footer) menu -->
                <?php if ( is_active_sidebar( 'footer-area-column-1' ) ) : ?>
                    <div class="footer-area-column-1 cell small-12 medium-3">
                        <?php dynamic_sidebar( 'footer-area-column-1' ); ?>
                    </div>
                <?php endif; ?>
                <!-- Footer column-2 - Made to show the location in the maps -->
                <?php if ( is_active_sidebar( 'footer-area-column-2' ) ) : ?>
                    <div class="footer-area-column-2 cell small-12 medium-3">
                        <?php dynamic_sidebar( 'footer-area-column-2' ); ?>
                    </div>
                <?php endif; ?>
                <!-- Footer column-3 - Social media links navigation -->
                <?php if ( is_active_sidebar( 'footer-area-column-3' ) ) : ?>
                    <div class="footer-area-column-3 cell small-12 medium-3">
                        <?php dynamic_sidebar( 'footer-area-column-3' ); ?>
                    </div>
                <?php endif; ?>
                <!-- Footer column-4 - Newsletter form created -->
                <?php if ( is_active_sidebar( 'footer-area-column-4' ) ) : ?>
                    <div class="footer-area-column-4 cell small-12 medium-3">
                        <?php dynamic_sidebar( 'footer-area-column-4' ); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- grid-x grid-margin-x grid-margin-y -->
		</div> <!-- grid-container -->
        <?php
                }
            }
        ?>

        <!-- Copyright and site information for the privacy of the site -->
		<div class="site-info">
			<?php
				/* translators: 
                1: Copyright, 
                2: Site. 
                */
				printf( esc_html__( 'Theme by Wordpress | Copyright %1$s by %2$s.', 'drinks' ), '2022', '<a href=" ' . home_url() . ' ">Le palais des liqueuers</a> | <a href=" ' . home_url() . '/privacy-policy"> Privacy Policy </a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
