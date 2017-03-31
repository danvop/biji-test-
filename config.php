<?php

return [
	'database' => [
		'name' => 'beejee',
		'username' => 'beejee',
		'password' => '123',
		'connection' => 'mysql:host=localhost:3306',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];		