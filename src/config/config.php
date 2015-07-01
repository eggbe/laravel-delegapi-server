<?php
use \Eggbe\DelegapiServer\Server;

return [
	'listen' => [
		Server::LISTEN_SECURE => 'SecurityListener',
		Server::LISTEN_ACTION => 'ActionListener',
		Server::LISTEN_SESSION => 'SessionListener',
	],
];
