<?php
/**
 * Plugin Name:       Superhelix Blocks V2
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       superhelix-blocks-v2
 *
 * @package CreateBlock
 */

if (!defined('ABSPATH')){
	exit; // ~ Exit if accessed directly.
}

//include_once __DIR__ . '/build/blocks/section/render.php';

function register_custom_blocks() {
	register_block_type( __DIR__ . '/build/blocks/section', array(
        'render_callback' => 'render_container_block',
    ));
}
add_action( 'init', 'register_custom_blocks' );

function enqueue_block_editor_assets() {
	wp_enqueue_script('section-block-editor-script', plugins_url( 'build/blocks/section/index.js', __FILE__ ), array( 'wp-blocks', 'wp-element', 'wp-editor' ));
}
add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets' );