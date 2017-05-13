<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';

$pagetitle = 'Add Admin..';
require '../header.php' ?>

    <div class="container">

        <div class="mt-4">
            <form name="test" method="post" action="../private/form_processors/save_admin.php">
                <div class="form-group row">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>

                <div class="form-group row">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">

                    <label for="password_repeat">Repeat password:</label>
                    <input type="password" name="password_repeat" class="form-control" id="password_repeat"
                           placeholder="Password">
                </div>

                <div class="row">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </form>
        </div> <!-- mt-4 -->

    </div>

<?php require '../footer.php';