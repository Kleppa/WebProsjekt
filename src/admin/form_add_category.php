<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';

loggedIn();

$pagetitle = 'Add Category..';
require '../header.php' ?>

    <div class="container">

        <form name="test" method="post" action="../private/form_processors/add_category.php">
            <div class="form-group row">
                <label for="name">Category:</label>
                <input type="text" name="name" class="form-control" id="name" value="">
            </div>

            <div class="row">
                <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
            </div>
        </form>
    </div>

<?php require '../footer.php';