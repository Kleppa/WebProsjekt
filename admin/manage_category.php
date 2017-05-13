<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';

$pagetitle = 'Add Category..';
require '../header.php' ?>

    <div class="container margin-adder">

        <div class="mt-4">
            <form name="test" method="post" action="../private/form_processors/save_category.php">

                <div class="form-group row">
                    <label class="form-control-label" for="category-select">Category:</label>
                    <select class="custom-select" name="place" id="category-select">
                        <?php

                        $result = $mysqli->query("SELECT id, name FROM categories;");
                        $count = 1;
                        foreach ($result as $value) {
                            $out = "<option name=\"name\" value=\"{$value['id']}\"";
                            if ($value['id'] === $_GET['id']) {
                                $out .= ' selected';
                            }
                            $out .= ">{$value['name']}</option>";
                            echo $out;
                            $count++;
                        } ?>
                    </select>

                </div>

                <div class="form-group row">
                    <label class="form-control-label" for="name">New Category:</label>
                    <input type="text" name="name" class="form-control" id="name" value="">
                </div>

                <div class="row">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </form>
        </div> <!-- mt-4 -->

    </div> <!-- container -->

<?php require '../footer.php';