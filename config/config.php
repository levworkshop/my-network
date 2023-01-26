<?php

define('DB_URL', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'password');
define('DB_NAME', 'my-network');

define('PDO_CFG', 'mysql:host=localhost;dbname=my-network;charset=utf8');

define('UPLOAD_MAX_SIZE', 1024 * 1024 * 2);
define('FILE_EXT', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('UPLOAD_DIR', dirname(__FILE__, 2) . "/upload/");