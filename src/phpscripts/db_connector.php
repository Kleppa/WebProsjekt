<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$port = 3306;
$username = 'root';
$password = 'password';
$name = 'database';

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => $port,
    'username' => $username,
    'password' => $password,
    'collation' => 'utf8_general_ci',
    'database' => $name,
]);
$capsule->bootEloquent();
