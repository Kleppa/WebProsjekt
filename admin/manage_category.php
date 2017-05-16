<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require server_root() . '/vendor/autoload.php';
require server_root() . '/private/phpscripts/db_connector.php';
require server_root() . '/private/phpscripts/functions.php';

$pagetitle = 'Add Category..';
require '../header.php' ?>

    <div class="container margin-adder">
        <form method="post" action="<?php echo server_root() ?>/private/form_processors/save_category.php">

            <!-- CATEGORY -->
            <div class="form-group row">
                <label for="category-select" class="col-12 col-md-3 col-form-label">Edit category</label>
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

            <!-- NEW CATEGORY -->
            <div class="form-group row">
                <label class="col-12 col-md-3 col-form-label" for="name">New category</label>
                <div class="col">
                    <input type="text" name="name" class="form-control" id="name" value="">
                </div>
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-3 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </div>
        </form>

    </div> <!-- container -->

<?php require '../footer.php';