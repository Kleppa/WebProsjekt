<?php
// Connecting the site to database

use Illuminate\Database\Capsule\Manager as Database;

$port = 3306;
$username = 'root';
$password = 'password';
$name = 'database';

$database = new Database();
$database->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => $port,
    'username' => $username,
    'password' => $password,
    'database' => $name,
    'collation' => 'utf8_general_ci'
]);
