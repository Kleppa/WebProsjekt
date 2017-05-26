<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';
if (!(loggedIn())) {
    redirect(server_root(1) . '/admin/login.php');
}

require_once '../private/includes/header.php';

$pagetitle = 'Admin Dashboard';
?>
    <div class="container margin-adder">
        <a class="btn btn-primary" href="manage_category.php">Manage categories</a>
        <a class="btn btn-primary" href="manage_admin.php">Manage admins</a>
        <a class="btn btn-primary" href="manage_event.php">Manage events</a>
        <a class="btn btn-primary" href="manage_food.php">Manage food-items</a>
        <a class="btn btn-primary" href="manage_place.php">Manage places</a>

    </div>

<?php require_once '../private/includes/footer.php';