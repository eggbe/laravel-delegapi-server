<?php
namespace Eggbe\LaravelDelegapiServer;

use \Illuminate\Support\Facades\Facade;

class LaravelDelegapiServerFacade extends Facade {

	/**
	 * Get the binding in the IoC container
	 * @return string
	 */
	public final static function getFacadeAccessor() {
		return 'DelegapiServer';
	}

}
