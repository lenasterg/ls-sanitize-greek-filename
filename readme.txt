=== LS Sanitize Greek Filenames ===
Contributors: lenasterg
Plugin URI: https://github.com/lenasterg/ls-sanitize-greek-filename
Description: Replaces Greek characters in filenames with their Latin equivalents upon file upload.
Version: 1.0
Author: lenasterg
Author URI: https://profiles.wordpress.org/lenasterg/
Requires at least: 4.6
Tested up to: 6.8
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: greek, filenames, sanitize

== Description ==
The "LS Sanitize Greek Filename" plugin automatically replaces Greek characters in filenames with their corresponding Latin equivalents during file uploads. This ensures compatibility and better handling of file names, especially when working with international websites or servers that may have issues with non-Latin characters.

Why is this needed?
Many file systems and web servers have limited support for non-Latin characters, which can cause issues when uploading files with Greek characters in their names. This plugin ensures that files are uploaded with filenames that are universally compatible, avoiding potential problems with file handling, linking, and display across different platforms and services. 

== Features ==
- Automatically converts Greek characters in filenames to their Latin equivalents.
- Helps improve compatibility with various file systems and web servers.
- Works seamlessly with the WordPress Media Library and file upload functions.
- Fully compatible with WordPress Multisite.

== Installation ==
1. Upload the `ls-sanitize-greek-filename` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. No additional setup is required; the plugin will automatically start sanitizing filenames during uploads.

== Usage ==
Once the plugin is activated, it will automatically sanitize the filename of the uploaded file by replacing Greek characters with their Latin equivalents. This process is applied as the files are uploaded through the WordPress Media Library or any other file upload method.

== Changelog ==
= 1.0 =
* Initial release.

== Frequently Asked Questions (FAQ) ==

= Does this plugin work with all file uploads? =
Yes, the plugin works with any file uploaded through the WordPress Media Library or other file upload functions.

= Can I customize the characters that are replaced? =
Currently, the plugin replaces Greek characters with their predefined Latin equivalents. If you need to customize the characters or mappings, you can modify the plugin's code directly.

== Support ==
For support or feature requests, visit the plugin's repository on GitHub: https://github.com/lenasterg/ls-sanitize-greek-filenames.

== License ==
This plugin is licensed under the GPLv2 or later.
