<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';


if (isset($_POST['id']) && isset($_POST['URI']) && isset($_POST['type'])) {

    $result = $mysqli->query("Select * from events WHERE ID = {$_POST['id']};");
    $row = mysqli_fetch_assoc($result);

    if ($_SESSION[$_POST['id'].' event'] != "Already Voted" && $_SESSION[$_POST['type'].' event'] !="Already Voted" ) {

        if ($row['id'] == $_POST['id'] && $row['type'] == $_POST['type']) {

            $_SESSION[$_POST['id'].' event']="Already Voted";
            $_SESSION[$_POST['type'].' event']="Already Voted";
            $mysqli->query("UPDATE events set score=score + 1 where id={$row['id']}");
            redirect(server_root(1) . $_POST['URI']);

        }
    }

    $result = $mysqli->query("Select * from places WHERE ID = {$_POST['id']};");
    $row = mysqli_fetch_assoc($result);

    if ($_SESSION[$_POST['id'].' place'] != "Already Voted" && $_SESSION[$_POST['type'].' place'] != "Already Voted") {

        if ($row['id'] == $_POST['id'] && $row['type'] == $_POST['type']) {

            $_SESSION[$_POST['id'].' place']="Already Voted";
            $_SESSION[$_POST['type'].' place']="Already Voted";
            $mysqli->query("UPDATE places set score=score + 1 where id={$row['id']}");
            redirect(server_root(1) . $_POST['URI']);
        }
    }
    redirect(server_root(1).$_POST['URI']);

}
/**
 * Created by PhpStorm.
 * User: Kleppa
 * Date: 26/05/2017
 * Time: 14:50
 */
?>