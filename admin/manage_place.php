<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';
if (!(loggedIn())) {
    redirect(server_root(1) . '/admin/login.php');
}

$pagetitle = 'Add Place..';
require_once '../private/includes/header.php';

if (isset($_GET['id'])) {

    $sql = 'SELECT * FROM places WHERE id=' . $_GET['id'] . ';';

    $resultSet = $mysqli->query($sql);
    $editResult = $resultSet->fetch_assoc();
} ?>

    <div class="container margin-adder">
        <form method="post"
              action="<?php echo server_root() ?>/private/form_processors/save_place.php<?php if (isset($_GET['id'])) echo '?id=' . $_GET['id']; ?>">

            <!-- NAME -->
            <div class="form-group row">
                <label for="name" class="col-12 col-md-3 col-form-label">Name:</label>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" class="form-control" id="name" placeholder="Name" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['title'];
                    } ?>">
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group row">
                <label for="description" class="col-12 col-md-3 col-form-label">Description:</label>
                <div class="col-md-9 col-12">
                        <textarea class="form-control" name="description" rows="4"
                                  id="description" placeholder="Description"><?php
                            if (isset($editResult)) {
                                echo $editResult['description'];
                            } ?></textarea>
                </div>
            </div>

            <!-- PROS -->
            <div class="form-group row">
                <label for="pros" class="col-12 col-md-3 col-form-label">Pros:</label>
                <div class="col-md-9 col-12">
                        <textarea class="form-control" name="pros" rows="2"
                                  id="pros" placeholder="Pros"><?php
                            if (isset($editResult)) {
                                echo $editResult['pros'];
                            } ?></textarea>
                </div>
            </div>

            <!-- ADDRESS -->
            <div class="form-group row">
                <label for="street" class="col-12 col-md-3 col-form-label">Address:</label>
                <div class="col-md-9 col-sm-12">
                    <input type="text" name="street" class="form-control mb-2" id="street"
                           placeholder="Street" value="<?php
                    if (isset($editResult)) {
                        $addressPieces = explode(",", $editResult['address']);
                        echo $addressPieces[0];
                    } ?>">
                </div>

                <label for="city" class="col-form-label sr-only">City</label>
                <div class="col-lg-6 col-md-5 col-8 offset-md-3">
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="<?php
                    if (isset($editResult)) {
                        $addressPieces = explode(",", $editResult['address']);
                        echo $addressPieces[2];
                    } ?>">
                </div>

                <label for="zip" class="col-form-label sr-only">Zipcode</label>
                <div class="col-lg-3 col-4">
                    <input type="number" name="zip" class="form-control" id="zip" placeholder="Zip" value="<?php
                    if (isset($editResult)) {
                        $addressPieces = explode(",", $editResult['address']);
                        echo $addressPieces[1];
                    } ?>">
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
                            $out = "<option name=\"category\" value=\"{$value['id']}\"";
                            if (isset($editResult) && $value['id'] === $editResult['category']) {
                                $out .= ' selected ';
                            }
                            $out .= ">{$value['name']}</option>";
                            echo $out;

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

                    if (isset($editResult)) $openingHours = openingHoursToAssoc($editResult['opening_hours']);

                    foreach ($weekdays as $weekday) {
                        $closed = false;
                        $out = '<label for="' . $weekday . '-time-from" class="col-12 col-md-3 col-form-label">' . ucfirst($weekday) . ':</label >';
                        $out .= '<div class="col-4 col-md-3 col-lg-2">';
                        $out .= '<input type="time" name="' . $weekday . '_time_from" class="form-control form-control-sm mb-2" 
                                id="' . $weekday . '-time-from" value="';
                        if (isset($openingHours)) {
                            if ($openingHours[$weekday . '_from'] === 'closed') {
                                $closed = true;
                            }
                            if ($closed) {
                                $out .= '';
                            } else {
                                $out .= $openingHours[$weekday . '_from'];
                            }
                        } else {
                            $out .= '08:00:00';
                        }
                        $out .= '"></div>';
                        $out .= '<label for="' . $weekday . '-time-to" class="col-form-label sr-only" > ' . ucfirst($weekday) . 'time to </label>';
                        $out .= '<div class="col-4 col-md-3 col-lg-2">';
                        $out .= '<input type="time" name="' . $weekday . '_time_to" class="form-control form-control-sm mb-2"
                                id="' . $weekday . '-time-to" value="';
                        if (isset($openingHours)) {
                            if ($closed) {
                                $out .= '';
                            } else {
                                $out .= $openingHours[$weekday . '_to'];
                            }
                        } else {
                            $out .= '20:00:00';
                        }
                        $out .= '"></div><div class="col-2 col-md-3 col-lg-5 form-check form-check-inline">';
                        $out .= '<label for="closed-check-' . $weekday . '" class="text-muted">';
                        $out .= '<input class="form-check-input text-muted" type="checkbox" name="closed_check_' . $weekday . '" id="closed-check-' . $weekday . '" value="1"';
                        if ($closed) {
                            $out .= ' checked';
                        }
                        $out .= '> Stengt';
                        $out .= '</label></div>';
                        echo $out;
                    } ?>
                </div>
            </fieldset>

            <!-- PHONE -->
            <div class="form-group row">
                <label for="tel" class="col-12 col-md-3 col-form-label">Phone:</label>
                <div class="col-12 col-md-9">
                    <input type="tel" name="tel" class="form-control" id="tel" placeholder="+47 000 00 000" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['phone'];
                    } ?>">
                </div>
            </div>

            <!-- WEBSITE -->
            <div class="form-group row">
                <label for="url" class="col-12 col-md-3 col-form-label">Website:</label>
                <div class="col-12 col-md-9">
                    <input type="url" name="url" class="form-control" id="url"
                           placeholder="http://url" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['url'];
                    } ?>">
                </div>
            </div>

            <!-- IMAGE -->
            <div class="form-group row">
                <label for="img" class="col-12 col-md-3 col-form-label">Image:</label>
                <div class="col-12 col-md-9">
                    <input type="url" name="img" class="form-control" id="img"
                           placeholder="http://url/image.png" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['image_path'];
                    } ?>">
                </div>
            </div>

            <!-- IMAGE-TEXT -->
            <div class="form-group row">
                <label for="img-text" class="col-12 col-md-3 col-form-label">Image text:</label>
                <div class="col-12 col-md-9">
                    <input type="text" name="img_text" class="form-control" id="img-text"
                           placeholder="Image text" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['img_text'];
                    } ?>">
                </div>
            </div>

            <!-- U20 -->
            <div class="col-10 offset-md-3 form-check form-check-inline">
                <label for="u20_check" class="text-muted">Alkoholservering under 20</label>
                <input class="form-check-input-right text-muted" name="u20" type="checkbox" value="true"
                       id="u20_check"<?php
                if (isset($editResult) && ($editResult['u20'] == 1)) {
                    echo ' checked';
                }
                ?>>
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-3 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </div>
        </form>
    </div>

<?php require '../private/includes/footer.php';
