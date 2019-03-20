<?php
$root = dirname(__DIR__, 2);
define('DIR_VENDOR', $root.'/vendor/');
// Autoloader
if (file_exists(DIR_VENDOR . 'autoload.php')) {
  require_once(DIR_VENDOR . 'autoload.php');
}

//init environment variables
$dotenv = Dotenv\Dotenv::create($root);
$dotenv->load();