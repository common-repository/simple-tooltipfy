<?php
/**
 * Plugin Name:       Simple Tooltipfy
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.5
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-tooltipfy
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function federico_cadierno_simple_tooltipfy_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'federico_cadierno_simple_tooltipfy_block_init' );
