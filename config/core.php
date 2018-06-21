<?php

// home page controller/action
define('APP_HOME', '/pages');

// provide a hostname for CLI access
if (PHP_SAPI == 'cli') {
	$_SERVER['HTTP_HOST'] = 'foo.bar.net';
}

// domain/subdomain
define('TESTING', true);
define('TESTINGLOCAL', true);

// debug
define('DEBUG', TESTING ? 1 : 0);

// paths
define('SQLLOG', APPDIR . '/tmp/logs/sql.log');
define('ERRORLOG', APPDIR . '/tmp/logs/error.log');
