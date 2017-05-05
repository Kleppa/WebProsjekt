<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

if (isset($_POST['submit'])) {

    $username = mysqlPrep($_POST['username']);
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql  = "INSERT INTO users (username, password) 
            VALUES ('{$username}', '{$hashedPassword}');";
    $result = $mysqli->query($sql);

    if ($result) {
        $mysqli->close();
        redirect('admins.php');
    } else {
        $mysqli->close();
        redirect('form_add_admin.php');
    }
} else {
    redirect('form_add_admin.php');
}
