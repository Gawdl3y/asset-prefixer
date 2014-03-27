<?php namespace Gawdl3y\AssetPrefixer;

use Illuminate\Html\HtmlBuilder;

class AssetBuilder extends HtmlBuilder {
	/**
	 * The prefix for asset paths
	 * 
	 * @var string
	 */
	protected $prefix;

	/**
	 * Create a new asset builder instance.
	 *
	 * @param  \Illuminate\Routing\UrlGenerator $url
	 * @param  string                           $prefix
	 * @return void
	 */
	public function __construct(UrlGenerator $url = null, $prefix = null) {
		parent::__construct($url);
		$this->prefix = $prefix;
	}

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @param  string  $url
	 * @param  array   $attributes
	 * @param  bool    $secure
	 * @return string
	 */
	public function script($url, $attributes = array(), $secure = null) {
		return parent::script($prefix . $url, $attributes, $secure);
	}

	/**
	 * Generate a link to a CSS file.
	 *
	 * @param  string  $url
	 * @param  array   $attributes
	 * @param  bool    $secure
	 * @return string
	 */
	public function style($url, $attributes = array(), $secure = null) {
		return parent::style($prefix . $url, $attributes, $secure);
	}

	/**
	 * Generate an HTML image element.
	 *
	 * @param  string  $url
	 * @param  string  $alt
	 * @param  array   $attributes
	 * @param  bool    $secure
	 * @return string
	 */
	public function image($url, $alt = null, $attributes = array(), $secure = null) {
		return parent::image($prefix . $url, $alt, $attributes, $secure);
	}

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @param  string  $url
	 * @param  string  $title
	 * @param  array   $attributes
	 * @param  bool    $secure
	 * @return string
	 */
	public function linkAsset($url, $title = null, $attributes = array(), $secure = null) {
		return parent::linkAsset($prefix . $url, $title, $attributes, $secure);
	}

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @param  string  $url
	 * @param  string  $title
	 * @param  array   $attributes
	 * @return string
	 */
	public function linkSecureAsset($url, $title = null, $attributes = array()) {
		return parent::linkSecureAsset($prefix . $url, $title, $attributes);
	}
}