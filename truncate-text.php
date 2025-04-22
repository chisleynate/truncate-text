<?php
/*
* Plugin Name:       WebPro Truncate Text
* Plugin URI:        https://NateChisley.com/wordpress-plugins/
* Description:       A lightweight tool for truncating text to a defined character length, enhanced with advanced customization.
* Version:           1.0.3
* Requires at least: 5.0
* Requires PHP:      7.2
* Author:            Nate Chisley (WebPro)
* Author URI:        https://NateChisley.com
* License:           GPLv2 or later (or compatible)
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       truncate-text
* Domain Path:       /languages
*/

define( 'TRUNCATE_TEXT_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );
define( 'TRUNCATE_TEXT_URL', trailingslashit( plugins_url('/', __FILE__) ) );

function truncate_text( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'limit' => 6,
        'encoding' => 'UTF-8',
        'location' => 'middle',
        'dots' => 3 // New default dots attribute
    ), $atts ) );

    $content_length = mb_strlen($content, $encoding);
    if ($content_length <= $limit) {
        return $content;
    }

    // Ensure dots is a positive integer
    $dots = max(0, abs(intval($dots)));
    $ellipsis = str_repeat('.', $dots);

    // Truncate based on location
    switch ($location) {
        case 'start':
            $content = $ellipsis . mb_substr($content, $content_length - $limit, $content_length, $encoding);
            break;
        case 'end':
            $content = mb_substr($content, 0, $limit, $encoding) . $ellipsis;
            break;
        case 'middle':
        default:
            if ($content_length > ($limit * 2 + $dots)) {
                $content = mb_substr($content, 0, $limit, $encoding) . $ellipsis . 
                          mb_substr($content, $content_length - $limit, $content_length, $encoding);
            }
            break;
    }

    return $content;
}
add_shortcode( 'truncate-text', 'truncate_text' );

function truncate_text_shortcode( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'limit' => 6,
        'encoding' => 'UTF-8',
        'location' => 'middle',
        'dots' => 3 // New default dots attribute
    ), $atts ) );

    $content = do_shortcode($content);
    $content_length = mb_strlen($content, $encoding);
    if ($content_length <= $limit) {
        return $content;
    }

    // Ensure dots is a positive integer
    $dots = max(0, abs(intval($dots)));
    $ellipsis = str_repeat('.', $dots);

    // Truncate based on location
    switch ($location) {
        case 'start':
            $content = $ellipsis . mb_substr($content, $content_length - $limit, $content_length, $encoding);
            break;
        case 'end':
            $content = mb_substr($content, 0, $limit, $encoding) . $ellipsis;
            break;
        case 'middle':
        default:
            if ($content_length > ($limit * 2 + $dots)) {
                $content = mb_substr($content, 0, $limit, $encoding) . $ellipsis . 
                          mb_substr($content, $content_length - $limit, $content_length, $encoding);
            }
            break;
    }

    return $content;
}
add_shortcode( 'truncate-shortcode', 'truncate_text_shortcode' );

$truncate_main_file = __FILE__; // full path to the actual plugin
require_once plugin_dir_path(__FILE__) . '/inc/links.php';

require_once TRUNCATE_TEXT_PATH . '/settings.php';