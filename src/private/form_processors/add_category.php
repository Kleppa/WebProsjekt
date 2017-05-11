<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);

    $sql  = "INSERT INTO categories (name) VALUES ('{$name}');";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('places.php');
    } else {
        $mysqli->close();
        redirect('form_add_category.php');
    }
} else {
    redirect('form_add_category.php');
}
