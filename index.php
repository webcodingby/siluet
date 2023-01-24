<?php

use APP\config\Database;

require_once('vendor/autoload.php');
$database = new Database();
$db = $database->getConnection();
var_dump($db);