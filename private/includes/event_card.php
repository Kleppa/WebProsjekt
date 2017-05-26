<?php
use Carbon\Carbon;

$date = new Carbon($row['datetime']);
Carbon::setLocale('no');
?>

<div class="col-xl-3 col-md-4 col-sm-6 col-xs-12 mb-3">
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

            <div class="text-right">
                <?php
                $server_root1=server_root(1);
                $str = <<<HTML
                
                <div class="btn-group">
                
                    <a href="{$server_root1}/admin/manage_place.php?id={$row['id']}"
                       class="btn btn-info"
                       id="edit"><i class="material-icons" style="color: white;">edit</i></a>
                    <a href="{$server_root1}/private/form_processors/remove_entry.php?id= {$row['id']}"
                       class="btn btn-danger"><i class="material-icons" style="color: white;">delete</i></a>
                    <a href="#" class="btn btn-secondary">+</a>
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
