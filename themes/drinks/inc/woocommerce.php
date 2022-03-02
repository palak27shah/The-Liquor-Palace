<?php
/**
 * Functions which enhance the theme by hooking woocommerce
 *
 * @package Love_for_Drinks
 */

/**
 * Allow block editor for single product
 */

function drinks_use_block_editor_for_post_type( $use_block_editor, $post_type ){
    if ( 'product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'drinks_use_block_editor_for_post_type', 10, 2);

/**
 * Remove defalut woocommerce styles
 */
// add_filter( 'wocommerce_enqueue_styles', '__return_false' );

/**
 * Re-add the product title
 */
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 4 );

