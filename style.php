<?php


require 'vendor/autoload.php';


require_once "vendor/leafo/scssphp/scss.inc.php";

use Leafo\ScssPhp\Server;

$directory = "scss";

Server::serveFrom($directory);
