<?php
namespace Eggbe\LaravelDelegapiServer;

use \Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\Config;

class LaravelDelegapiServerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register bindings in the container.
	 * @return void
	 */
	public function register() {
		$this->mergeConfigFrom(dirname(__DIR__) . '/config/delegapi-server.php', 'delegapi-server');
		$this->app->singleton('DelegapiServer', function () {
			return new LaravelDelegapiServer(Config::get('delegapi-server'));
		});
	}

	/**
	 * Register the publishes.
	 */
	public final function boot() {
		$this->publishes([
			dirname(__DIR__) . '/config/delegapi-server.php' => config_path('eggbe/delegapi-server.php'),
		]);
	}

}
