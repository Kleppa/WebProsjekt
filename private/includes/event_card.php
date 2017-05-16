<?php
require_once $_SERVER['DOCUMENT_ROOT'] . server_root() . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . server_root() . '/private/phpscripts/functions.php';

use Carbon\Carbon;

$date = new Carbon($row['datetime']);
Carbon::setLocale('no');
?>

<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?php echo $row['image_path']; ?>"/>

        <div class="card-block">
            <h2 class="card-title"><?php echo $row['title'] ?></h2>
            <p class="card-text"><?php echo $row['description'] ?></p>

        </div> <!-- card-block -->

        <div class="card-footer text-muted">
            <p><?php echo $date->diffForHumans() ?></p>

            <div class="text-right">
                <div class="btn-group">
                    <a href="<?php echo server_root() ?>/admin/manage_place.php?id=<?php echo $row['id']; ?>"
                       class="btn btn-info"
                       id="edit"><i class="material-icons" style="color: white;">edit</i></a>
                    <a href="<?php echo server_root() ?>/private/form_processors/remove_entry.php?id=<?php echo $row['id']; ?>"
                       class="btn btn-danger"><i class="material-icons" style="color: white;">delete</i></a>
                    <a href="#" class="btn btn-secondary">+</a>
                </div> <!-- btn-group -->
            </div> <!-- text-right wrapper -->

        </div> <!-- card-footer -->

    </div> <!-- card -->
</div>
