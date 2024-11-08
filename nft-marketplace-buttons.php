<?php
/*
Plugin Name: NFT Marketplace Buttons
Description: Adds buttons to NFT marketplaces using a shortcode.
Version: 1.0.1
Author: Harry Python
*/

// Function to get icon content from file (supports SVG, PNG, etc.)
function get_icon($marketplace) {
    $extensions = ['svg', 'png', 'jpg', 'gif']; // Supported extensions
    foreach ($extensions as $ext) {
        $file_path = plugin_dir_path(__FILE__) . 'icons/' . $marketplace . '.' . $ext;
        if (file_exists($file_path)) {
            return '<img src="' . plugin_dir_url(__FILE__) . 'icons/' . $marketplace . '.' . $ext . '" alt="' . esc_attr($marketplace) . ' icon">';
        }
    }
    return '';
}


// Function to handle the shortcode
function nft_marketplace_buttons_shortcode($atts) {
    // Define default attributes and merge with user-defined attributes
    $atts = shortcode_atts(
        array(
            'marketplace' => '', // Marketplace name
            'url' => '', // URL for the button
            'button_text' => 'Buy' // Default button text
        ),
        $atts,
        'nft_marketplace_buttons'
    );

    // Sanitize attributes to prevent XSS attacks
    $marketplace = isset($atts['marketplace']) ? strtolower(esc_attr($atts['marketplace'])) : '';
    $url = isset($atts['url']) ? esc_url($atts['url']) : '';
    $button_text = isset($atts['button_text']) ? esc_html($atts['button_text']) : 'Buy';

    // Check if required attributes are provided
    if (empty($marketplace) || empty($url)) {
        return 'Marketplace and URL are required.';
    }

    // Get the SVG icon content
    $icon = get_icon($marketplace);
    if (empty($icon)) {
        return 'Invalid marketplace specified or icon not found.';
    }

    // Add a shopping cart icon
    $cart_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>';

    // Generate the HTML output for the button
    $output = '<div class="nft-marketplace-buttons">';
    $output .= sprintf('<a href="%s" target="_blank" class="nft-button">%s <span class="buy-text">%s on</span> <span class="nft-icon">%s</span></a>', $url, $cart_icon, $button_text, $icon);
    $output .= '</div>';

    return $output;
}

// Function to enqueue styles for the plugin
function nft_marketplace_buttons_enqueue_styles() {
    wp_enqueue_style('nft-marketplace-buttons', plugin_dir_url(__FILE__) . 'style.css');
}

// Register the shortcode and enqueue styles
add_shortcode('nft_marketplace_buttons', 'nft_marketplace_buttons_shortcode');
add_action('wp_enqueue_scripts', 'nft_marketplace_buttons_enqueue_styles');
