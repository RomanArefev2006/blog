<?php
session_start();
global $db;
require_once "../core/config/constants.php";
require_once VENDOR . "/autoload.php";
require_once CONFIG . "/db.php";
require_once CORE . "/func.php";


$db = new \core\classes\Db($db_config);

$router = new core\classes\Router();
require_once CONFIG . "/routes.php";
$router->router();