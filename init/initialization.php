<?php 
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'app');
// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'www'.DS.'html');
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'webkeja');
defined('CONFIG_PATH') ? null : define('CONFIG_PATH', SITE_ROOT.DS.'config');
defined('INIT_PATH') ? null : define('INIT_PATH', SITE_ROOT.DS.'init');
defined('MODELS_PATH') ? null : define('MODELS_PATH', SITE_ROOT.DS.'models');
defined('MIGRATION_PATH') ? null : define('MIGRATION_PATH', SITE_ROOT.DS.'migration');
defined('VENDOR_PATH') ? null : define('VENDOR_PATH', SITE_ROOT.DS.'vendor');
defined('PUBLIC_PATH') ? null : define('PUBLIC_PATH', SITE_ROOT.DS.'public');

$site_url = "http://localhost/webkeja/";

// db connections
require_once(CONFIG_PATH.DS.'database.php');

// load sessions 
require_once(CONFIG_PATH.DS.'sessions.php');

// load all system functions
require_once(CONFIG_PATH.DS.'functions.php');

// load mail()
require_once(VENDOR_PATH.DS.'autoload.php');

// mail class
require_once(MODELS_PATH.DS.'mail.php');

// load tenants
require_once(MODELS_PATH.DS.'tenants.php');