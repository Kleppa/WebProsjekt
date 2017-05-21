<?php
require_once server_root() . '/vendor/autoload.php';
require_once server_root() . '/private/phpscripts/functions.php';
?>

<div class="col-xl-3 col-lg-4 col-md-6 col-xs-12 mb-3">
    <div class="card mb-3">
        <a href="<?php echo server_root() . '/info/restaurant_info.php?id=' . $row['id']; ?>"
           style="text-decoration:none; color:black;">
            <img class="card-img-top img-fluid" <?php echo 'src="' . $row['image_path'] . '"' . 'alt="' . $row['name'] . '"' ?>>
        </a>
        <div class="card-block">
            <a href="<?php echo server_root() . '/info/restaurant_info.php?id=' . $row['id']; ?>"
               style="text-decoration:none; color:black;">
                <h2 class="card-title"><?php echo $row['name'] ?></h2>
            </a>
            <p class="card-text"><?php echo $row['description'] ?></p>

        </div> <!-- card-block -->

        <div class="card-footer text-muted">
            <p class="card-text"><?php echo $row['address']; ?></p>
            <p class="card-text">
                <small>Opening Hours: <?php echo $row['opening_hours']; ?></small>
            </p>

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
