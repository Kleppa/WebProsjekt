<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

loggedIn();

$pagetitle = 'Add Category..';
require '../header.php' ?>

    <div class="container">

        <form name="test" method="post" action="add_category.php">
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