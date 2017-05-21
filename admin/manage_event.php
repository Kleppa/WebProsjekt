<?php
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';
use Carbon\Carbon;
if (isset($_GET['id'])) {

    $sql = "SELECT * FROM events WHERE id={$_GET['id']};";
    $editResult = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($editResult);
    echo str_replace(' ', 'T', $row['datetime']);
    $datetime = new Carbon($row['datetime']);
    $datetime->format('DD/MM/YYYY/HH/MM'); //TODO: fix;
    echo $datetime;
}

$pagetitle = 'Add Event..';
$extra_links = ['datepicker' => '<link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"/>'];
$extra_scripts = ['datepicker' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>'];

require '../private/includes/header.php'; ?>

    <div class="container margin-adder">
        <form method="post"
              action="<?php echo server_root() ?>/private/form_processors/save_event.php<?php if (isset($_GET['id'])) echo '?id=' . $_GET['id']; ?>">

            <!-- TITLE -->
            <div class="form-group row">
                <label for="title" class="col-12 col-md-3 col-form-label">Title:</label>
                <div class="col">
                    <input type="text" name="title" class="form-control" id="title" value=" <?php
                    if (isset($editResult)) {
                        $row = mysqli_fetch_assoc($editResult);
                        if ($_GET['id'] === $row['id']) {
                            echo $row['title'];
                        }
                    } ?>">
                </div>

            </div>

            <!-- PLACE-SELECT -->
            <div class="form-group row">
                <label for="place-select" class="col-12 col-md-3 col-form-label">Place</label>
                <div class="col">
                    <select class="custom-select" name="place" id="place-select">
                        <?php
                        $placeResult = $mysqli->query("SELECT id, title FROM places;");
                        $count = 1;
                        foreach ($placeResult as $row) {
                            $out = "<option name=\"place\" value=\"{$row['id']}\"";
                            if ($row['id'] === $_GET['id']) {
                                $out .= ' selected';
                            }
                            $out .= ">{$row['title']}</option>";
                            echo $out;
                            $count++;
                        } ?>
                    </select>
                </div>
            </div>

            <!-- DATEPICKER format: YYYY-MM-DDTHH:MM:SS -->
            <div class="form-group row">
                <label for="datetime-local" class="col-12 col-md-3 col-form-label">Date:</label>
                <div class="col">
                    <input type="datetime-local" class="form-control" id="datetime-local" value="<?php
                    if (isset($editResult)) {
                        $row = mysqli_fetch_assoc($editResult);
                        echo str_replace(' ', 'T', $row['datetime']);
                    } else echo '2017-01-01T12:00:00'; ?>">
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group row">
                <label for="description" class="col-12 col-md-3 col-form-label">Description:</label>
                <div class="col-md-9 col-12">
                        <textarea class="form-control" name="description" rows="4"
                                  id="description" placeholder="Description">
                            <?php
                            if (isset($editResult)) {
                                $row = mysqli_fetch_assoc($editResult);
                                echo $row['description'];
                            }
                            ?>
                        </textarea>
                </div>
            </div>

            <!-- IMAGE -->
            <div class="form-group row">
                <label for="img" class="col-12 col-md-3 col-form-label">Title:</label>
                <div class="col">
                    <input type="url" name="image_path" class="form-control" id="img" value="<?php
                    if (isset($editResult)) {
                        $row = mysqli_fetch_assoc($editResult);
                        echo $row['image_path'];
                    }
                    ?>">
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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

<?php require '../private/includes/footer.php';