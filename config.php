<?php

define('SITE_NAME', 'GIFTIME | Sending an international gift has never been more convenient');
define('CONTACT_EMAIL', 'contact@deployment.com');


//DB parameters have to be specified here AND in /migrations/.dbup/properties.ini

if ($_SERVER['HTTP_HOST'] == 'server.deployment.com') {
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_BASE', 'test');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
} else {
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_BASE', 'twhack');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
}
