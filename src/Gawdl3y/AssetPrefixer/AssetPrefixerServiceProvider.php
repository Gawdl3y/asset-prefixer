<?php namespace Gawdl3y\AssetPrefixer;

use Illuminate\Support\ServiceProvider;

class AssetPrefixerServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		$this->app['config']->package('gawdl3y/asset-prefixer', $this->guessPackagePath() .'/config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->bindShared('assetprefixer', function($app) {
			return new AssetBuilder($app['url'], $this->app['config']->get('asset-prefixer::config.prefix'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return array('assetprefixer');
	}
}