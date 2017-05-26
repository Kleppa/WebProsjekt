<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';

if (isset($_GET['id'])) {
    $sql = 'SELECT * FROM food WHERE id=' . $_GET['id'] . ';';
    $resultSet = $mysqli->query($sql);
    $editResult = mysqli_fetch_assoc($resultSet);
}

$pagetitle = 'Add Food..';
require '../private/includes/header.php'; ?>

    <div class="container margin-adder">
        <form method="post"
              action="<?php echo server_root() ?>/private/form_processors/save_food.php<?php if (isset($_GET['id'])) echo '?id=' . $_GET['id']; ?>">

            <!-- NAME -->
            <div class="form-group row">
                <label for="name" class="col-12 col-md-3 col-form-label">Name:</label>
                <div class="col">
                    <input type="text" name="name" class="form-control" id="name" value="<?php
                    if (isset($editResult)) {
                        echo $editResult['title'];
                    } ?>">
                </div>
            </div>

            <!-- PLACE SELECT -->
            <div class="form-group row">
                <label for="place-select" class="col-12 col-md-3 col-form-label">Place</label>
                <div class="col">
                    <select class="custom-select" name="place" id="place-select">
                        <option <?php if (!isset($_GET['id'])) echo 'selected'; ?>>Choose...</option>
                        <?php $result = $mysqli->query("SELECT places.id AS placeID, places.title AS placeName, food.id AS foodID FROM places LEFT JOIN food ON food.place = places.id;");
                        $count = 1;
                        foreach ($result as $value) {
                            $out = '<option name="place" value="';
                            $out .= $value['placeID'] . '"';
                            if (isset($_GET['id'])) {
                                if ($_GET['id'] === $value['foodID']) {
                                    $out .= ' selected';
                                }
                            }
                            $out .= '>' . $value['placeName'] . '</option>';
                            echo $out;
                            $count++;
                        } ?>

                    </select>
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group row">
                <label for="description" class="col-12 col-md-3 col-form-label">Description:</label>
                <div class="col-md-9 col-12">
                        <textarea class="form-control" name="description" rows="4"
                                  id="description" placeholder="Description"><?php
                            if (!empty($editResult)) {
                                foreach ($editResult as $item) {
                                    echo $item['description'];
                                }
                            }

                            ?></textarea>
                </div>
            </div>

            <!-- PRICE-SELECT -->
            <div class="form-group row">
                <label class="col-12 col-md-3 col-form-label" for="price-select">Price</label>
                <div class="col">
                    <select class="custom-select" name="price" id="price-select">
                        <option selected>Choose...</option>
                        <option value="1">$</option>
                        <option value="2">$$</option>
                        <option value="3">$$$</option>
                    </select>
                </div>
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
