<?php
/**
 * Functions which enhance the theme by hooking woocommerce
 *
 * @package Love_for_Drinks
 */

function drinks_use_block_editor_for_post_type( $use_block_editor, $post_type ){
    if ( 'product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'drinks_use_block_editor_for_post_type', 10, 2);