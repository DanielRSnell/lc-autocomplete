<?php
/**
 * Plugin Name: LC Autocomplete
 * Description: Provides autocomplete functionality for the Live Canvas editor, enhancing user experience with efficient coding assistance.
 * Version: 1.0
 * Author: Artisan
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: lc-autocomplete
 * 
 * @package LC-Autocomplete
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Includes the endpoint functionality for the plugin.
 * 
 * This file is part of the core functionality of the LC Autocomplete plugin. It handles 
 * the endpoint logic for the autocomplete feature.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/endpoint.php';

/**
 * Enqueues scripts and styles for the plugin.
 * 
 * This file is responsible for enqueuing the necessary scripts and stylesheets required 
 * by the plugin to function properly.
 */
require plugin_dir_path( __FILE__ ) . 'includes/enqueue.php';

/**
 * Includes helper functions for cleaning and sorting data.
 * 
 * This file contains functions that provide utility features such as cleaning data and 
 * sorting arrays or objects used in the plugin.
 */
require plugin_dir_path( __FILE__ ) . 'includes/helpers/clean_sort.php';

/**
 * Includes the payload file for the plugin.
 * 
 * This file manages the payload data that is essential for the autocomplete functionality,
 * ensuring accurate and relevant data is provided to users.
 */
require plugin_dir_path( __FILE__ ) . 'includes/payload.php';

// Additional code and functionalities specific to your plugin can be added below.