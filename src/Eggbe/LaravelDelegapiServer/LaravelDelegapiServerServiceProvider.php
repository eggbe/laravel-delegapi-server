<?php
namespace Eggbe\LaravelDelegapiServer;

use \Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\Config;

use \Eggbe\DelegapiServer\Server;

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
		$this->package('eggbe/laravel-delegapi-server');
		LaravelDelegapiServer::$Config = Config::get('laravel-delegapi-server::config');
	}

}
