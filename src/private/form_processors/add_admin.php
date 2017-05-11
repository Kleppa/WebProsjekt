<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {
    if ($_POST['password'] === $_POST['password_repeat']) {

        $username = mysqlPrep($_POST['username']);
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password) 
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
} else {
    redirect('form_add_admin.php');
}
