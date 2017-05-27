<?php
use Carbon\Carbon;

$date = new Carbon($row['datetime']);
Carbon::setLocale('no');
?>

<div class="col-xl-4 col-sm-6 col-xs-12 mb-3">
    <div class="card">
        <a href="<?php echo server_root(1); ?>/info/details.php?id=<?php echo $row['id']; ?>&type=<?php echo $row['type']; ?>">
            <img class="card-img-top img-fluid" src="<?php echo $row['image_path']; ?>"
                 alt="<?php echo $row['title']; ?>">
        </a>

        <div class="card-block">
            <a href="<?php echo server_root(1) . '/info/details.php?id=' . $row['id']; ?>"
               style="text-decoration: none; color: black">
                <h4 class="card-title"><?php echo $row['title']; ?></h4>
            </a>
            <p class="card-text"><?php echo $row['description'].' - '. $row['pros']; ?></p>

        </div> <!-- card-block -->

        <div class="card-footer text-muted">
            <p><?php echo $date->diffForHumans() ?></p>

            <div class="d-flex justify-content-between">


                <?php
                $server_root1 = server_root(1);


                $scoreform = <<<FORM
                <form action="{$server_root1}/private/form_processors/score_updater.php" method="post">
                <input type="hidden" name="URI" value="{$_SERVER['REQUEST_URI']}"/>
                <input type="hidden" name="id" value="{$row['id']}"/>
                <input type="hidden" name="type" value="{$row['type']}"/>
                <input type="submit" name="submit" id="submit" class="material-icons btn btn-success" value="thumb_up"/>
              
                 </form>
                   
FORM;
                echo $scoreform;
                $str = <<<HTML

                    <div class="btn-group">
                    <a href="{$server_root1}/admin/manage_place.php?id={$row['id']}"
                       class="btn btn-info"
                       id="edit"><i class="material-icons" style="color: white;">edit</i></a>
                    <a href="{$server_root1}/private/form_processors/remove_entry.php?id={$row['id']}"
                       class="btn btn-danger"><i class="material-icons" style="color: white;">delete</i></a>
                    <a href="#" class=" material-icons btn btn-secondary">note_add</a>
                   </div>
HTML;
                if(loggedIn()) {
                    echo $str;
                }
                ?> <!-- btn-group -->

            </div> <!-- text-right wrapper -->

        </div> <!-- card-footer -->

    </div> <!-- card -->
</div> <!-- col -->
