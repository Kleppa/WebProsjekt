<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);

    $sql = isset($_GET['id']) ?
        "UPDATE categories SET name '{$name}';"
        :
        "INSERT INTO categories (name) VALUES ('{$name}');";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect('/admin/admin.php');
    } else {
        $mysqli->close();
        redirect('/admin/manage_category.php');
    }
} else {
    redirect('/admin/manage_category.php');
}
