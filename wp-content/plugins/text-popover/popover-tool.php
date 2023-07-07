<?php
/**
 * Plugin Name:       Text Popover
 * Description:       We can add popover content on selected text in WordPress block it's available on all blocks which have toolbar like paragraph block, heading block etc...
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            chinteshprajapati
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       text-popover
 *
 * @package           text-popover
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function text_popover_block_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'text_popover_block_init' );

/**
 * Text popover require js
 *
 * @return void
 */
function text_popover_block_reuqire_assets() {
	wp_enqueue_script( 'popover_tool_js', plugin_dir_url( __FILE__ ) . 'assets/js/popovertool.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_style( 'popover_tool_css', plugin_dir_url( __FILE__ ) . 'assets/css/popovertool.min.css', '', '1.0', 'all' );
	wp_add_inline_script(
		'popover_tool_js',
		'jQuery(function () {
			jQuery(\'[data-toggle="text-popover"]\').popover();
		  });'
	);
}
add_action( 'wp_enqueue_scripts', 'text_popover_block_reuqire_assets' );

/**
 * Text popover editor js
 *
 * @return void
 */
function text_popover_load_admin_scripts() {
	wp_enqueue_editor();
}
add_action( 'admin_enqueue_scripts', 'text_popover_load_admin_scripts' );

