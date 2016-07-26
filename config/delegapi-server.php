<?php
use \Eggbe\DelegapiServer\Server;

return [
	'listen' => [

		/**
		 * Binding the simple callback function to the action.
		 */
		Server::ON_AUTHORIZE => function(){},

		/**
		 * Binding the special listener class to the action.
		 * The listener have to extend Eggbe\DelegapiServer\Abstracts\AListener.
		 */
		Server::ON_EXECUTE => 'ActionListener',
	],
];
