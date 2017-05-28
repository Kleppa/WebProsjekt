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
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Administration Page</h4>
            </div>
            <div class="col">
                <a class="btn btn-primary mb-2" href="manage_admin.php">Create admin</a>
                <a class="btn btn-primary mb-2" href="manage_event.php">Create event</a>
                <a class="btn btn-primary mb-2" href="manage_place.php">Create place</a>
            </div>
        </div>
    </div>

<?php require_once '../private/includes/footer.php';
