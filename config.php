<?php

return [
	'database' => [
		'name' => 'tasks',
		'username' => 'root',
		'password' => '',
		'connection' => 'mysql:host=localhost:3306',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];		