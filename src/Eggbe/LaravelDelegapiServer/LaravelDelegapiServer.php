<?php
namespace Eggbe\LaravelDelegapiServer;

use \Eggbe\DelegapiServer\Server;
use \Eggbe\DelegapiServer\Abstracts\AListener;

class LaravelDelegapiServer {

	/**
	 * @var array
	 */
	public static $Config = [];

	/**
	 * @var Client
	 */
	private static $Server = null;

	/**
	 * @param string $method
	 * @param array $Args
	 * @return Client
	 * @throws \Exception
	 */
	public static function __callStatic($method, array $Args = []){
		if (is_null(self::$Server)){
			self::$Server = new Server();
			if (array_key_exists('listen', self::$Config)){
				if (!is_array(self::$Config)){
					throw new \Exception('Invalid configuration [1]!');
				}
				foreach(self::$Config['listen'] as $name => $class){
					if (!is_subclass_of($class, AListener::class)) {
						throw new \Exception('Invalid configuration [2]!');
					}
					self::$Server->listen($name, new $class());
				}
			}
		}
		return call_user_func_array([self::$Server, $method], $Args);
	}

}
