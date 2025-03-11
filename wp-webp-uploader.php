<?php
/**
 * Plugin Name: WP WebP Uploader Pro
 * Description: Automatically converts uploaded images to WebP and replaces them in the media library.
 * Version: 1.0
 * Author: Shubham Ralli
 * Author URI: https://github.com/shubham-ralli
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-webp-uploader-pro
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'inc/convert.php';
require_once plugin_dir_path(__FILE__) . 'inc/image-filters.php';

// Hook into WordPress upload process
add_filter('wp_handle_upload', 'webp_convert_on_upload');

function webp_convert_on_upload($upload) {
    $file_path = $upload['file'];
    $file_type = $upload['type'];

    // Convert only these formats
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/webp'];

    if (!in_array($file_type, $allowed_types)) {
        return $upload;
    }

    $converted_webp = webp_convert_image($file_path, $file_type);

    if ($converted_webp) {
        $upload['file'] = $converted_webp['path'];
        $upload['url'] = $converted_webp['url'];
        $upload['type'] = 'image/webp';
    }

    return $upload;
}
