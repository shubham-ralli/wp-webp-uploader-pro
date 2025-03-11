<?php
if (!defined('ABSPATH')) {
    exit;
}

add_filter('wp_get_attachment_image_src', 'replace_with_webp', 10, 4);

function replace_with_webp($image, $attachment_id, $size, $icon) {
    if (!is_array($image) || empty($image[0])) {
        return $image;
    }

    $original_url = $image[0];
    $webp_url = preg_replace('/\.(jpg|jpeg|png|gif|bmp)$/i', '.webp', $original_url);

    if (file_exists(str_replace(wp_upload_dir()['baseurl'], wp_upload_dir()['basedir'], $webp_url))) {
        $image[0] = $webp_url;
    }

    return $image;
}
