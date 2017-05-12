<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';
if (isset($_GET['id'])) {

    $sql = 'SELECT * FROM events LEFT JOIN types ON types.id=events.id WHERE events.id=' . $_GET['id'] . ';';

    if ($editResult = $mysqli->query($sql)) {

    }


}

$pagetitle = 'Add Event..';
$extra_links = ['datepicker' => '<link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"/>'];
$extra_scripts = ['datepicker' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>'];
require '../header.php'; ?>

    <div class="container">
        <div class="mt-4">
            <form name="test" method="post" action="../private/form_processors/save_event.php">
                <div class="form-group row">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value=" <?php
                    if(isset($_GET['id'])) {
                        $editResult2 = $mysqli->query("SELECT id, title FROM events;");

                        foreach ($editResult2 as $item) {
                            if ($_GET['id'] === $item['id']) {
                                echo $item['title'];
                            }
                        }
                    }
                    ?>">



                </div>

                <div class="form-group row">
                    <label for="place-select">Place</label>
                    <select class="custom-select" name="place" id="place-select">


                        <?php

                        $result = $mysqli->query("SELECT id, name FROM places;");
                        $count = 1;
                        foreach ($result as $value) {
                            $out = "<option name=\"place\" value=\"{$value['id']}\"";
                            if ($value['id'] === $_GET['id']) {
                                $out .= ' selected';
                            }
                            $out .= ">{$value['name']}</option>";
                            echo $out;
                            $count++;
                        } ?>

                    </select>
                </div>

                <div class="input-group date" data-provide="datepicker">
                    <label for="datepicker">Date:</label>
                    <input type="text" class="form-control" id="datepicker" <?php
                    if (!empty($editResult)) {
                        foreach ($editResult as $newitem) {
                            echo 'value=' . $newitem['datetime'];
                        }
                    }

                    ?>>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" rows="5" id="description"><?php
                        if (!empty($editResult)) {
                            foreach ($editResult as $item) {
                                echo $item['description'];
                            }
                        }

                        ?> </textarea>
                </div>

                <div class="row">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

<?php require '../footer.php';