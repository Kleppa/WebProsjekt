<div class="col-xl-3 col-lg-4 col-md-6 col-xs-12 mb-3">
    <div class="card mb-3">
        <a href="<?php echo server_root(1); ?>/info/details.php?id=<?php echo $row['id']; ?>&type=<?php echo $row['type']; ?>">
            <img class="card-img-top img-fluid" <?php echo 'src="' . $row['image_path'] . '"' . 'alt="' . $row['title'] . '"' ?>>
        </a>
        <div class="card-block">
            <a href="<?php echo server_root(1) . '/info/details.php?id=' . $row['id']; ?>"
               style="text-decoration:none; color:black;">
                <h2 class="card-title"><?php echo $row['title'] ?></h2>
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
                    <a href="<?php echo server_root(1) ?>/admin/manage_place.php?id=<?php echo $row['id']; ?>"
                       class="btn btn-info"
                       id="edit"><i class="material-icons" style="color: white;">edit</i></a>
                    <a href="<?php echo server_root(1) ?>/private/form_processors/remove_entry.php?id=<?php echo $row['id']; ?>"
                       class="btn btn-danger"><i class="material-icons" style="color: white;">delete</i></a>
                    <a href="#" class="btn btn-secondary"><i class="material-icons">note_add</i></a>
                </div> <!-- btn-group -->
            </div> <!-- text-right wrapper -->

        </div> <!-- card-footer -->

    </div> <!-- card -->
</div>
