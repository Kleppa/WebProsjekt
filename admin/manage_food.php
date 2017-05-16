<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';
if (isset($_GET['id'])) {

    $sql = 'SELECT * FROM food ';

    if ($editResult = $mysqli->query($sql)) {

    }
}
$pagetitle = 'Add Food..';
require '../header.php'; ?>

    <div class="container margin-adder">
        <form method="post" action="../private/form_processors/save_food.php">

            <!-- NAME -->
            <div class="form-group row">
                <label for="name" class="col-12 col-md-3 col-form-label">Name:</label>
                <div class="col">
                    <input type="text" name="name" class="form-control" id="name" value="<?php
                    if (isset($_GET['id'])) {
                        $editResult2 = $mysqli->query("SELECT id, name FROM food;");

                        foreach ($editResult2 as $item) {
                            if ($_GET['id'] === $item['id']) {
                                echo $item['name'];
                            }
                        }
                    }
                    ?>">
                </div>
            </div>

            <!-- PLACE SELECT -->
            <div class="form-group row">
                <label for="place-select" class="col-12 col-md-3 col-form-label">Place</label>
                <div class="col">
                    <select class="custom-select" name="place" id="place-select">
                        <option <?php if (!isset($_GET['id'])) echo 'selected'; ?>>Choose...</option>
                        <?php $result = $mysqli->query("SELECT places.id AS placeID, places.name AS placeName, food.id AS foodID FROM places LEFT JOIN food ON food.place = places.id;");
                        $count = 1;
                        foreach ($result as $value) {
                            $out = '<option name=\"place\" value=\"';
                            $out .= $value['placeID'] . '\"';
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

<?php require '../footer.php';