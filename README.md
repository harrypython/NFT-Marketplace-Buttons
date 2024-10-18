# NFT Marketplace Buttons Plugin

**Version**: 1.0  
**Author**: Harry Python

## Description

The NFT Marketplace Buttons plugin adds customizable buttons to your WordPress site, linking to various NFT marketplaces. Each button includes a shopping cart icon, the text "Buy on," and the marketplace's logo.

## Features

- Supports multiple NFT marketplaces (e.g., Objkt, Rarible, Foundation).
- Displays a customizable button with a shopping cart icon, the text "Buy on," and the marketplace's logo.
- Easy to use with a simple shortcode.
- Lightweight and flexible.

## Installation

1. Download the `nft-marketplace-buttons` plugin.
2. Upload the plugin to the `wp-content/plugins` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Place your SVG icons in the `icons` directory of the plugin.

## Usage

Add the following shortcode to any post or page:

```text
[nft_marketplace_buttons marketplace="marketplace_name" url="marketplace_url" button_text="button_text"]

Replace marketplace_name with the name of the marketplace (e.g., objkt, rarible, foundation), marketplace_url with the URL of your marketplace listing, and button_text with the desired text for the button (e.g., "Bid," "Make an Offer"). The button_text parameter is optional and will default to "Buy" if not provided.

## Example
```text
[nft_marketplace_buttons marketplace="objkt" url="https://objkt.com/tokens/KT1Feeb2hAvAnR4vqU2XC5HKXdQNYUZLbHsM/"]

This will generate a button linking to your NFT listing on Objkt.

To customize the button text:

[nft_marketplace_buttons marketplace="objkt" url="https://objkt.com/collection/KT1Feeb2hAvAnR4vqU2XC5HKXdQNYUZLbHsM/" button_text="Bid"]


# Customization
## CSS
You can customize the appearance of the buttons by editing the style.css file in the plugin directory.

```css
.nft-marketplace-buttons .nft-button {
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 4px;
    color: inherit;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.nft-marketplace-buttons .nft-button svg {
    height: 24px;
    margin-right: 8px;
}

.nft-marketplace-buttons .nft-button .nft-icon {
    display: flex;
    align-items: center;
}

.nft-marketplace-buttons .nft-button .buy-text {
    color: black;
    margin-right: 8px;
}

.nft-marketplace-buttons .nft-button:hover {
    transform: scale(1.05);
    background-color: #f0f0f0;
}

# License
This plugin is open-source and free to use under Apache License.
