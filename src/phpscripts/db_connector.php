<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$port = 3306;
$username = 'gabreve1_admin';;
$password = 'gruppe12wenture';
$name = 'gabreve1_pro101v17gr12';
$host = 'tek.westerdals.no';

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $host,
    'port' => $port,
    'username' => $username,
    'password' => $password,
    'collation' => 'utf8_general_ci',
    'database' => $name,
]);
$capsule->bootEloquent();
