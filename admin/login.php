<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';
require_once '../private/includes/header.php';

$pagetitle = 'Admin Login';
?>
    <div class="container margin-adder">

        <?php if (!empty($_SESSION['errors'])) {
            echo '<div class="alert alert-danger"><strong>Error!</strong> ' . $_SESSION['errors'] . '</div>';
            $_SESSION['errors'] = '';
        } ?>

        <form name="test" method="post"
              action="<?php echo server_root(1); ?>/private/form_processors/login.php">

            <!-- USERNAME -->
            <div class="form-group row">
                <label for="username" class="col-12 col-md-3 col-form-label">Username:</label>
                <div class="col">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-group row">
                <label for="password" class="col-12 col-md-3 col-form-label mb-2">Password:</label>
                <div class="col-12 col-md-9">
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Password">
                </div>
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-3 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit" value="Login"/>
                </div>
            </div>
        </form>

    </div>

<?php require_once '../private/includes/footer.php';