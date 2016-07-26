<?php
use \Eggbe\DelegapiServer\Server;

return [
	'listen' => [

		/**
		 * Binding a simple callback function to the action.
		 */
		Server::ON_AUTHORIZE => function(){},

		/**
		 * Binding a special listener class ti the action.
		 * The listener class have to extend Eggbe\DelegapiServer\Abstracts\AListener.
		 */
		Server::ON_EXECUTE => 'ActionListener',
	],
];
