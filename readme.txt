=== Shortcode Detector ===
Contributors: dev_apocalypseboy
Donate link: http://apocalypseboy.com/shortcode-detector/
Tags: shortcode, detection
Requires at least: 3.5.1
Tested up to: 3.5.1
License: GPLv2 or later
Stable tag: trunk

Detects shortcodes before wp_head() call.

== Description ==

Detects shortcodes before wp_head() call to allow selective enqueuing of scripts and styles (i.e. js and css files) that are specifically used for shortcode.

= How to use the plugin? =

Make sure that the shortcode you want to detect is defined. If it is a Wordpress shortcode then there's no need to define it. 
`<?php add_shortcode( 'my_shorcode', 'my_function' ); ?>`

To detect the shortcode use the code below. Change 'my_shortcode' to the shortcode you want to detect. 
`<?php add_action( 'shortcode_detected_my_shortcode', 'my_add_resources_function' ); ?>`

== Installation ==

1. Upload `shortcode_detector.zip` to the `/wp-content/plugins/` directory and unarchive.
1. Activate the plugin through the 'Plugins' menu in WordPress.

Or

1. Download it through the WordPress admin and activate.

== Documentation ==

For more information check the [Plugin Documentation](http://apocalypseboy.com/shortcode-detector/ "Shortcode Detector").

== Frequently Asked Questions ==

No faqs yet. Check the developer's site and use the contact form to ask questions.

== Changelog ==

= 1.0.0 =
* First Release