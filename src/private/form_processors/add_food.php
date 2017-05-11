<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);
    $desc = mysqlPrep($_POST['description']);

    $sql  = "INSERT INTO food (place, name, description, price) 
            VALUES ({$_POST['place']}, '{$name}', '{$desc}', {$_POST['price']});";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('places.php');
    } else {
        $mysqli->close();
        redirect('form_add_food.php');
    }
} else {
    redirect('form_add_food.php');
}
