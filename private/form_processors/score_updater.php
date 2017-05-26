<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';


if (isset($_POST['id']) && isset($_POST['URI']) && isset($_POST['type'])) {

    $result = $mysqli->query("Select * from events WHERE ID = {$_POST['id']};");
    $row = mysqli_fetch_assoc($result);
    var_dump($_POST['URI']);

    if ($row['id'] == $_POST['id'] && $row['type'] == $_POST['type']) {
        $mysqli->query("UPDATE events set score=score + 1 where id={$row['id']}");
        redirect(server_root(1).$_POST['URI']);

    }

    $result = $mysqli->query("Select * from places WHERE ID = {$_POST['id']};");
    $row = mysqli_fetch_assoc($result);
    if ($row['id'] == $_POST['id'] && $row['type'] == $_POST['type']) {
        var_dump('FAKKAYOU');
        $mysqli->query("UPDATE places set score=score + 1 where id={$row['id']}");
        redirect(server_root(1).$_POST['URI']);

    }

}
/**
 * Created by PhpStorm.
 * User: Kleppa
 * Date: 26/05/2017
 * Time: 14:50
 */
?>