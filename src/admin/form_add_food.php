<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';
if (isset($_GET['id'])) {

    $sql = 'SELECT * FROM food ';

    if ($editResult = $mysqli->query($sql)) {

    }
}
$pagetitle = 'Add Food..';
require '../header.php'; ?>

    <div class="container">
        <div class="mt-4">
            <form name="test" method="post" action="../private/form_processors/save_food.php">
                <div class="form-group row">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value=" <?php
                    if(isset($_GET['id'])) {
                        $editResult2 = $mysqli->query("SELECT id, name FROM food;");

                        foreach ($editResult2 as $item) {
                            if ($_GET['id'] === $item['id']) {
                                echo $item['name'];
                            }
                        }
                    }
                    ?>">
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
                    <textarea class="form-control" name="description" rows="5" id="description"><?php
                        if (!empty($editResult)) {
                            foreach ($editResult as $item) {
                                echo $item['description'];
                            }
                        }

                        ?></textarea>
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
    </div>

<?php require '../footer.php';