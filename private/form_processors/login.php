<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (loggedIn()) {
    redirect('../../admin/admin.php');
}

if (isset($_POST['submit']) && ($_POST['username'] || $_POST['username'])) {
    $username = mysqlPrep($_POST['username']);
    $password = mysqlPrep($_POST['password']);
    $sql = "SELECT * FROM users WHERE username = '{$username}';";

    if ($result = $mysqli->query($sql)) {
        $row = mysqli_fetch_assoc($result);
        $hashed_pass = $row['password'];
        $check = password_verify("{$password}", "{$hashed_pass}");
        echo "{$password}" . "{$hashed_pass}";
        var_dump($check);
        if (password_verify("{$password}", "{$hashed_pass}")) {
            $_SESSION['username'] = $username;
            $mysqli->close();
            redirect(server_root() . '/admin/admin.php');
        }
        $_SESSION['errors'] .= 'Password or username is incorrect.err1';
        $mysqli->close();
        //redirect(server_root() . '/admin/login.php');
    } else {
        $_SESSION['errors'] .= 'Password or username is incorrect.err2';
        $mysqli->close();
        redirect(server_root() . '/admin/login.php');
    }
    $_SESSION['errors'] .= 'Missing username or password.err3';
    //redirect(server_root() . '/admin/login.php');
}