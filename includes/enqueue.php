<?php 

/**
 * Adds the autocomplete script tag to the page.
 *
 * This function outputs a script tag for the 'completions.js' file in the current plugin's directory, with the 'defer' attribute.
 */
function lc_add_autocomplete_extension() {
    // Get the URL of the current plugin directory and append the path to completions.js
    $script_url = plugin_dir_url(__FILE__) . 'assets/completions.js';

    // Echo the script tag with the correct source URL
    echo '<script id="autocomplete-main" src="' . esc_url($script_url) . '" defer></script>';
}

add_action('lc_editor_header', 'lc_add_autocomplete_extension');