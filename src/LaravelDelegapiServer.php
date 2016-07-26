<?php
namespace Eggbe\LaravelDelegapiServer;

use \Eggbe\DelegapiServer\Server;
use \Eggbe\DelegapiServer\Abstracts\AListener;


class LaravelDelegapiServer  extends Server {

	/**
	 * LaravelDelegapiServer constructor.
	 * @param array $Config
	 */
	public final function __construct(array $Config = []){
		if (array_key_exists('listen', $Config)){
			foreach($Config['listen'] as $name => $class){
				$this->listen($name, new $class());
			}
		}
	}

}
