<?php
namespace Eggbe\LaravelDelegapiServer;

use \Eggbe\DelegapiServer\Server;
use \Eggbe\DelegapiServer\Abstracts\AListener;


class LaravelDelegapiServer  extends Server {

	/**
	 * LaravelDelegapiServer constructor.
	 * @param array $Config
	 */
	public final function __construct(array $Config = []) {
		if (array_key_exists('listen', $Config)) {
			foreach ($Config['listen'] as $name => $Listener) {

				/**
				 * Listeners can be assigned as a callback or as an object.
				 * In this case we have to pass it to the method.
				 */
				if (is_callable($Listener) || is_object($Listener)) {
					$this->listen($name, $Listener);
					continue;
				}

				/**
				 * Alternatively listeners can be assigned as a string that contains a valid class name.
				 * In this case we have to initialize an object and pass it to the method.
				 */
				$this->listen($name, new $class());
			}
		}
	}

}
