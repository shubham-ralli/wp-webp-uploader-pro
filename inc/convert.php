<?php
if (!defined('ABSPATH')) {
    exit;
}

function webp_convert_image($source_path, $mime_type) {
    $image_info = pathinfo($source_path);
    $webp_path = $image_info['dirname'] . '/' . $image_info['filename'] . '.webp';
    $webp_url = str_replace(wp_upload_dir()['basedir'], wp_upload_dir()['baseurl'], $webp_path);

    // If WebP already exists, return it
    if (file_exists($webp_path)) {
        return ['path' => $webp_path, 'url' => $webp_url];
    }

    // Convert the image
    switch ($mime_type) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source_path);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source_path);
            imagepalettetotruecolor($image); // Fix transparency issues
            imagealphablending($image, true);
            imagesavealpha($image, true);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source_path);
            break;
        case 'image/bmp':
            $image = imagecreatefrombmp($source_path);
            break;
        default:
            return false;
    }

    if (!$image) {
        return false;
    }

    // Save WebP with compression (adjust quality)
    imagewebp($image, $webp_path, 85);
    imagedestroy($image);

    return ['path' => $webp_path, 'url' => $webp_url];
}
