
# NFT Marketplace Buttons Plugin

## Description
The NFT Marketplace Buttons plugin adds customizable buttons to your WordPress site, linking to various NFT marketplaces. Each button includes a shopping cart icon, the text "Buy on," and the marketplace's logo.

## Features
- Supports multiple NFT marketplaces (e.g., Objkt, LooksRare, Manifold).
- Displays a customizable button with a shopping cart icon, the text "Buy on," and the marketplace's logo.
- Easy to use with a simple shortcode.
- Lightweight and flexible.

## Installation
1. Download the `nft-marketplace-buttons` plugin.
1. Upload the plugin to the `wp-content/plugins` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage
Add the following shortcode to any post or page:
```text
[nft_marketplace_buttons marketplace="marketplace_name" url="marketplace_url" button_text="button_text"]
```
Replace marketplace_name with the name of the marketplace (e.g., objkt, rarible, foundation), marketplace_url with the URL of your marketplace listing, and button_text with the desired text for the button (e.g., "Bid," "Make an Offer"). The button_text parameter is optional and will default to "Buy" if not provided.

## Example
```text
[nft_marketplace_buttons marketplace="objkt" url="https://objkt.com/tokens/KT1Feeb2hAvAnR4vqU2XC5HKXdQNYUZLbHsM/"]
```
This will generate a button linking to your NFT listing on Objkt.  

To customize the button text:
```text
[nft_marketplace_buttons marketplace="objkt" url="https://objkt.com/collection/KT1Feeb2hAvAnR4vqU2XC5HKXdQNYUZLbHsM/" button_text="Bid"]
```

# Customization
## CSS
You can customize the appearance of the buttons by editing the `style.css` file in the plugin directory.

# License

This plugin is open-source and free to use under Apache License.
