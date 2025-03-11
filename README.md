# WP WebP Uploader Pro

## Description
WP WebP Uploader Pro is a WordPress plugin that automatically converts uploaded images (JPG, PNG, GIF, BMP) to **WebP format** before storing them in the media library. It also replaces image URLs on the frontend with WebP versions to improve website performance.

## Features
✅ **Automatic WebP Conversion** – Converts images during upload.  
✅ **Supports Multiple Formats** – Works with JPG, PNG, GIF, and BMP files.  
✅ **Optimized WebP Compression** – Uses smart compression with adjustable quality.  
✅ **Frontend Image Replacement** – Automatically serves WebP images if available.  
✅ **GD Library Support** – Uses PHP’s built-in `GD` library for conversion.  
✅ **Prevents Duplicate Conversion** – Skips conversion if WebP version already exists.  

## Installation
1. **Download the Plugin**
   - Clone the repository or download the ZIP file.

2. **Upload to WordPress**
   - Upload the plugin folder to:  
     ```
     /wp-content/plugins/wp-webp-uploader-pro/
     ```

3. **Activate the Plugin**
   - Go to **WordPress Admin > Plugins** and activate **WP WebP Uploader Pro**.

## Usage
- Simply **upload images** as usual. The plugin will automatically convert them to WebP.
- On the **frontend**, if a WebP version exists, it will be loaded instead of JPG/PNG.

## Filter Hooks (Customization)
Customize WebP quality using the `wp_webp_quality` filter:
```php
add_filter('wp_webp_quality', function() {
    return 90; // Adjust quality (default: 85)
});
```

## Future Enhancements
- 🔹 **Admin Panel Settings** (Change quality, enable/disable WebP replacement)  
- 🔹 **Bulk Convert Existing Images** in `/wp-content/uploads/`  
- 🔹 **Imagick Support** for better image processing  

## License
WP WebP Uploader Pro is licensed under the **GPL v2 or later**.  
See [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html) for details.

---

### **Author**
👤 **Shubham Ralli**  
🔗 [GitHub Profile](https://github.com/shubham-ralli)
