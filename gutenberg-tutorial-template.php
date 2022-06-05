<?php
/**
 * Plugin Name:       Gutenberg Tutorial Template
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-tutorial-template
 *
 * @package           create-block
 */

function create_block_gutenberg_tutorial_template_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_gutenberg_tutorial_template_block_init' );
