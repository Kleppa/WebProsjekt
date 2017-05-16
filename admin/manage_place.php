<?php
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';

$pagetitle = 'Add Place..';
require_once '../private/includes/header.php'; ?>

    <div class="container margin-adder">
        <form method="post" action="<?php echo server_root() ?>/private/form_processors/save_place.php">

            <!-- NAME -->
            <div class="form-group row">
                <label for="name" class="col-12 col-md-3 col-form-label">Name:</label>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" class="form-control" id="name" value="" placeholder="Name">
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group row">
                <label for="description" class="col-12 col-md-3 col-form-label">Description:</label>
                <div class="col-md-9 col-12">
                        <textarea class="form-control" name="description" rows="4"
                                  id="description" placeholder="Description"></textarea>
                </div>
            </div>

            <!-- ADDRESS -->
            <div class="form-group row">
                <label for="street" class="col-12 col-md-3 col-form-label">Address:</label>
                <div class="col-md-9 col-sm-12">
                    <input type="text" name="zip" class="form-control mb-2" id="street" value=""
                           placeholder="Street">
                </div>

                <label for="city" class="col-form-label sr-only">City</label>
                <div class="col-lg-6 col-md-5 col-8 offset-md-3">
                    <input type="text" name="name" class="form-control" id="city" value="" placeholder="City">
                </div>

                <label for="zip" class="col-form-label sr-only">Zipcode</label>
                <div class="col-lg-3 col-4">
                    <input type="number" name="name" class="form-control" id="zip" value="" placeholder="Zip">
                </div>
            </div>

            <!-- CATEGORY -->
            <div class="form-group row">
                <label for="category-select" class="col-12 col-md-3 col-form-label">Category</label>
                <div class="col">
                    <select class="custom-select" name="category" id="category-select">
                        <option selected>Choose...</option>
                        <?php $result = $mysqli->query("SELECT * FROM categories;");
                        $count = 1;
                        foreach ($result as $value) {
                            echo "<option name=\"category\" value=\"{$value['id']}\">{$value['name']}</option>";
                            $count++;
                        } ?>
                    </select>
                </div>
            </div>

            <!-- OPENING HOURS -->
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-legend">Opening-hours:</legend>

                    <?php
                    $weekdays = [
                        'monday',
                        'tuesday',
                        'wednesday',
                        'thursday',
                        'friday',
                        'saturday',
                        'sunday'
                    ];

                    foreach ($weekdays as $weekday) {
                        echo '
                            <label for="' . $weekday . '-time-from" class="col-12 col-md-3 col-form-label" >' . ucfirst($weekday) . ':</label >
                            <div class="col-4 col-md-3 col-lg-2">
                                <input type = "time" name = "' . $weekday . '-time-from" class="form-control form-control-sm mb-2" 
                                id = "' . $weekday . '-time-from" value = "08:00:00">
                            </div>
                            <label for="' . $weekday . '-time-to" class="col-form-label sr-only">' . ucfirst($weekday) . 'time to</label >
                            <div class="col-4 col-md-3 col-lg-2">
                                <input type = "time" name = "' . $weekday . '-time-to" class="form-control form-control-sm mb-2" 
                                id = "' . $weekday . '-time-to" value = "20:00:00">
                            </div>
                            <div class="col-2 col-md-3 col-lg-5 form-check form-check-inline">
                                <label for="closed-check-' . $weekday . '" class="text-muted">
                                    <input class="form-check-input text-muted" type="checkbox" id="closed-check-' . $weekday . '" value="closed"> Stengt
                                </label>
                            </div>
                            ';
                    } ?>
                </div>
            </fieldset>

            <!-- PHONE -->
            <div class="form-group row">
                <label for="tel" class="col-12 col-md-3 col-form-label">Phone:</label>
                <div class="col-12 col-md-9">
                    <input type="tel" name="tel" class="form-control" id="tel" value="" placeholder="+47 000 00 000">
                </div>
            </div>

            <!-- WEBSITE -->
            <div class="form-group row">
                <label for="url" class="col-12 col-md-3 col-form-label">Website:</label>
                <div class="col-12 col-md-9">
                    <input type="url" name="url" class="form-control" id="url" value=""
                           placeholder="http://url">
                </div>
            </div>

            <!-- IMAGE -->
            <div class="form-group row">
                <label for="img" class="col-12 col-md-3 col-form-label">Website:</label>
                <div class="col-12 col-md-9">
                    <input type="url" name="img" class="form-control" id="img" value=""
                           placeholder="http://url/image.png">
                </div>
            </div>

            <!-- U20 -->
            <div class="col-10 offset-md-3 form-check form-check-inline">
                <label for="u20_check" class="text-muted">Alkoholservering under 20</label>
                <input class="form-check-input-right text-muted" type="checkbox" id="u20_check">
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-3 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </div>
        </form>
    </div>

<?php require '../footer.php';