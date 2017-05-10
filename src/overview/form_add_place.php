<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

loggedIn();

$pagetitle = 'Add Place..';
require '../header.php'; ?>

    <div class="container">

        <form name="test" method="post" action="add_food.php">
            <div class="form-group row">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="">
            </div>

            <div class="form-group row">
                <label for="place-select">Place</label>
                <select class="custom-select" name="place" id="place-select">
                    <option selected>Choose...</option>
                    <?php $result = $mysqli->query("SELECT id, name FROM places;");
                    $count = 1;
                    foreach ($result as $value) {
                        echo "<option name=\"place\" value=\"{$value['id']}\">{$value['name']}</option>";
                        $count++;
                    } ?>
                </select>
            </div>

            <div class="form-group row">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="5" id="description"></textarea>
            </div>

            <div class="form-group row">
                <label class="mr-sm-2" for="price-select">Price</label>
                <select class="custom-select mb-2" name="price" id="price-select">
                    <option selected>Choose...</option>
                    <option value="1">$</option>
                    <option value="2">$$</option>
                    <option value="3">$$$</option>
                </select>
            </div>

            <div class="row">
                <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
            </div>
        </form>
    </div>

<?php require '../footer.php';