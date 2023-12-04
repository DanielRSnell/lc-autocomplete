<?php

/**
 * Handles requests for the completions endpoint.
 *
 * This function is designed to handle the logic for the REST API endpoint that provides
 * autocomplete suggestions. It uses a filter to modify and retrieve the completions array,
 * then sends it as a JSON response.
 *
 * @return void Outputs the JSON response and exits.
 */
function handle_completions_endpoint() {
    // Apply a filter to get the completions array. 
    // Developers can modify this array by hooking to the 'lc_modify_completions' filter.
    $completions = apply_filters('lc_modify_completions', []);

    // Send the completions array as a JSON response.
    wp_send_json($completions);
}

/**
 * Registers the REST API route for completions.
 *
 * This function adds a custom REST API route to WordPress. The route is used to retrieve
 * autocomplete suggestions for the Live Canvas editor. It defines a GET method endpoint 
 * at '/livecanvas/v1/completions'.
 */
add_action('rest_api_init', function () {
    register_rest_route('livecanvas/v1', '/completions', [
        'methods' => 'GET',  // Define the HTTP method as GET.
        'callback' => 'handle_completions_endpoint', // Specify the callback function for this endpoint.
    ]);
});