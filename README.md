# NFT Marketplace Buttons

**Version:** 1.0  
**Author:** Harry Python

## Description

The NFT Marketplace Buttons plugin adds buttons to various NFT marketplaces using a shortcode. This allows users to easily link to their NFTs on popular marketplaces like Rarible, LooksRare, and Objkt.

## Installation

1. Download the plugin files and upload them to your WordPress site's `wp-content/plugins` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Ensure you have the required styles by enqueuing the `style.css` file included with the plugin.

## Usage

To use the plugin, add the following shortcode to your posts or pages:

```php
[smp contract="your_contract_address" blockchain="your_blockchain" network="your_network" token_id="your_token_id" marketplace="your_marketplace"]
````

## Shortcode Attributes
 - contract (required): The contract address of the NFT.
- blockchain (required): The blockchain on which the NFT resides.
- network (optional): The network type (default is mainnet).
- token_id (optional): The ID of the specific token.
- marketplace (required): The marketplace to link to (rarible, looksrare, objkt).

## Example
```php
[smp contract="0x1234567890abcdef" blockchain="ethereum" network="mainnet" token_id="1" marketplace="rarible"]
```

## Supported Marketplaces
- Rarible
- LooksRare
- Objkt
