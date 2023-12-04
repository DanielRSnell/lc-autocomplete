<?php 


function handle_completions_endpoint() {
    // Apply a filter to get the completions array. 
    $completions = apply_filters('lc_modify_completions', []);

    // Return the completions array as a JSON response.
    wp_send_json($completions);
}

// Register the REST API route.
add_action('rest_api_init', function () {
    register_rest_route('livecanvas/v1', '/completions', [
        'methods' => 'GET',
        'callback' => 'handle_completions_endpoint',
    ]);
});