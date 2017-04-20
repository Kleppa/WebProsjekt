<?php


$port = 3306;
$host = 'tek.westerdals.no';
$name = 'gabreve1_pro101v17gr12';
$username = 'gabreve1_admin';
$password = 't{QMdZOxXBi(';

$mysqli = new mysqli($host, $username, $password, $name);

if($mysqli->connect_errno)
{
    // -- DEBUGGING --
echo "Error: Failed to make a MySQL connection, here is why: \n";
echo "Errno: " . $mysqli->connect_errno . "\n";
echo "Error: " . $mysqli->connect_error . "\n";
exit;

}
