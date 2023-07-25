<?php
defined('BASEPATH') OR exit('No direct script access allowed');

return array(

	'config' => array(
		'base_url' => 'http://example.com/classroombookings/',
		'log_threshold' => 1,
		'index_page' => 'index.php',
		'uri_protocol' => 'REQUEST_URI',
	),

	'database' => array(
		'dsn' => '',
		'hostname' => '127.0.0.1',
		'username' => 'db_user',
		'password' => 'db_pass',
		'database' => 'db_name',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
	),

);
