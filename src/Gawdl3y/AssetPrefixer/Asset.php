<?php namespace Gawdl3y\AssetPrefixer;

use \Illuminate\Support\Facades\Facade;

/**
 * @see \Gawdl3y\AssetPrefixer\AssetBuilder
 */
class Asset extends Facade {
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'assetprefixer'; }
}