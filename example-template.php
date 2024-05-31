<?php
/*
Plugin Name: Example ACF Template
Description: Example ACF field template.
Version: 1.0
Author: Your Name
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function example_template_acf_json_load_point( $paths ) {
    $template_path = plugin_dir_path( __FILE__ ) . 'fields.json';
    
    // Check if the file exists
    if ( file_exists( $template_path ) ) {
        error_log( 'ACF Template Path: ' . $template_path );
        $paths[] = $template_path;
    } else {
        error_log( 'ACF Template Path not found: ' . $template_path );
    }

    return $paths;
}
add_filter( 'acf/settings/load_json', 'example_template_acf_json_load_point' );
