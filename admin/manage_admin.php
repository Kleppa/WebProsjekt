<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';

$pagetitle = 'Add Admin..';
require '../header.php' ?>

    <div class="container margin-adder">
        <form name="test" method="post" action="../private/form_processors/save_admin.php">

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
                <label for="password_repeat" class="col-12 col-md-3 col-form-label">Repeat password:</label>
                <div class="col-12 col-md-9">
                    <input type="password" name="password_repeat" class="form-control" id="password_repeat"
                           placeholder="Password">
                </div>
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-2 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </div>
        </form>

    </div>

<?php require '../footer.php';