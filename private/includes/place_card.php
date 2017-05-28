<?php // Generates a 'card' based on database data ?>

<div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 mb-3">

    <div class="card">
        <a href="<?php echo server_root(1); ?>/info/details.php?id=<?php echo $row['id']; ?>&type=<?php echo $row['type']; ?>">
            <img class="card-img-top img-fluid" src="<?php echo server_root(1) . $row['image_path']; ?>"
                 alt="<?php echo $row['title']; ?>">
        </a>

        <div class="card-block" style="background-color: ">
            <a href="<?php echo server_root(1) . '/info/details.php?id=' . $row['id']; ?>&type=<?php echo $row['type']; ?>"
               style="text-decoration:none; color:black;">
                <h4 class="card-title"><?php echo $row['title'] ?></h4>
            </a>
            <p class="card-text"><?php echo $row['description'] . ' - ' . $row['pros'] ?></p>

        </div> <!-- card-block -->

        <div class="card-footer text-muted" >
            <p class="card-text"><?php echo $row['address']; ?></p>

            <div class="d-flex justify-content-between">

                <?php $like_status_flag = (isset($_SESSION['like_flag' . '_id_' . $row['id'] . '_type_' . $row['type']]))
                    ? 'btn-info' : 'btn-success'; ?>

                <a href="<?php echo server_root(1); ?>/private/form_processors/score_updater.php?id=<?php echo $row['id']; ?>&type=<?php echo $row['type']; ?>&ref=<?php echo $_SERVER['REQUEST_URI']; ?>"
                   class="btn <?php echo $like_status_flag; ?>"><i class="material-icons">thumb_up</i></a>


                <?php if (loggedIn()) { ?>
                    <!-- Administration buttons -->
                    <div class="btn-group">
                        <a href="<?php echo server_root(); ?>/admin/manage_place.php?id=<?php echo $row['id']; ?>"
                           class="btn btn-info"
                           id="edit"><i class="material-icons" style="color: white;">edit</i></a>
                        <a href="<?php echo server_root(); ?>/private/form_processors/remove_entry.php?id=<?php echo $row['id']; ?>"
                           class="btn btn-danger"><i class="material-icons" style="color: white;">delete</i></a>
                    </div> <!-- btn-group -->
                <?php } ?>

            </div> <!-- justify-content -->

        </div> <!-- card-footer -->

    </div> <!-- card -->
</div>
