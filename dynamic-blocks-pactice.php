<?php
/**
 * Plugin Name:       Dynamic Posts Block Pactice
 * Description:       Display and filter latest posts.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Tanvir
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       latest-posts
 *
 * @package           blocks-course
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function blocks_course_latest_posts_block_init() {
	register_block_type( __DIR__ . '/build/dynamic-blocks-pactice' );
}
add_action( 'init', 'blocks_course_latest_posts_block_init' );
