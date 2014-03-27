Laravel 4 Asset Prefixer
==============

This is a simple package that allows you to provide a prefix for asset paths, for things such as using AWS S3 for assets in production, but using local copies in development.

## Installation

Require this package in your composer.json and run `composer update` (or run `composer require gawdl3y/asset-prefixer:1.0.*`):

    "gawdl3y/asset-prefixer": "~1.0"

After installing the package, add the ServiceProvider to the providers array in app/config/app.php:

    'Gawdl3y\AssetPrefixer\AssetPrefixerServiceProvider',

Also, add the facade to the aliases array:

    'Asset' => 'Gawdl3y\AssetPrefixer\Asset',

Optionally, you may replace the HTML alias with it as well, since the AssetBuilder extends HtmlBuilder:

    'HTML' => 'Gawdl3y\AssetPrefixer\Asset',

And finally, run `composer config:publish gawdl3y/asset-prefixer`

## Usage

The AssetBuilder can be used as a drop-in replacement for HtmlBuilder by replacing the HTML facade alias. The methods are the same as the default ones provided by the HtmlBuilder class. The methods that AssetBuilder modifies to add the prefixes to are `script()`, `style()`, `image()`, `linkAsset()`, and `linkSecureAsset()`. Note that when using a prefix, `linkSecureAsset()` will not modify the protocol if you already provide it. I recommend using protocol-relative prefixes, like `//somecdn.net/`. This will use HTTP when you're viewing an HTTP page, and use HTTPS when viewing an HTTPS page.
