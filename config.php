<?php
defined('BASEPATH') OR exit('No direct script access allowed');

return array(

	'config' => array(
		'base_url' => 'http://http://room-booking/',
		'log_threshold' => 1,
		'index_page' => 'index.php',
		'uri_protocol' => 'REQUEST_URI',
	),

	'database' => array(
		'dsn' => '',
		'hostname' => '127.0.0.1',
		'username' => 'setup',
		'password' => 'Swinglow2021',
		'database' => 'crbs_db',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
	),

);
