=== WebP Uploader Pro ===
Contributors: shubham-ralli
Tags: webp, image optimization, convert images, wordpress media
Requires at least: 5.0
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Converts uploaded images (JPG, PNG, GIF, BMP) to WebP before saving in the media library and replaces URLs for faster loading.

== Description ==
WebP Uploader Pro is a lightweight WordPress plugin that ensures your website loads faster by converting images to WebP format upon upload. It also replaces image URLs on the frontend, ensuring visitors get the optimized WebP version if available.

**Features:**
* Automatic WebP conversion for JPG, PNG, GIF, and BMP
* Optimized WebP compression with customizable quality
* Automatically replaces frontend image URLs with WebP if available
* Uses PHP's GD library for conversion
* Prevents duplicate conversions for efficiency

== Installation ==
1. Download the plugin ZIP file or clone the repository.
2. Upload the folder to `/wp-content/plugins/wp-webp-uploader-pro/`
3. Activate the plugin through the "Plugins" menu in WordPress.

== Usage ==
* Upload images as usual, and they will automatically be converted to WebP.
* The plugin will automatically serve WebP images on the frontend.

== Frequently Asked Questions ==
= Does this plugin delete the original image? =
No, it keeps the original file unless specified otherwise in future updates.

= Can I adjust WebP quality? =
Yes, use the following filter in your theme's `functions.php`:
```php
add_filter('wp_webp_quality', function() {
    return 90; // Adjust quality (default: 85)
});
```

= Will this work with existing images? =
Currently, the plugin only converts new uploads, but bulk conversion is planned.

== Changelog ==
= 1.1 =
* Added filter for WebP quality customization
* Improved duplicate WebP detection
* Enhanced PNG transparency support

= 1.0 =
* Initial release with automatic WebP conversion

== License ==
This plugin is licensed under the GPL v2 or later.

== Author ==
**Shubham Ralli**
GitHub: [https://github.com/shubham-ralli](https://github.com/shubham-ralli)
