<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
$hrefLinkVar='';


use Carbon\Carbon;
$date = new Carbon($row['datetime']);
Carbon::setLocale('no');

?>

<div class="card mb-3">
    <img class="card-img-top img-fluid" src="<?php echo $row['image_path'] ?>"/>
    <div class="card-block">
        <h2 class="card-title"><?php echo $row['title'] ?></h2>
        <p class="card-text"><?php echo $row['description'] ?></p>
    </div> <!-- card-block -->
    <div class="card-footer text-muted d-flex justify-content-between">
        <?php

        if (isset($row['address'])){
            echo '<p>' . $row['address'] . '</p>';
            echo '<p>' . 'Opening Hours:' . $row['opening_hours'] . '</p>';
        }
        ?>
        <p><?php echo $date->diffForHumans() ?></p>
        <div class="text-right">
            <div class="btn-group">
                <?php
                if(true) {
                    if($row['type'] === 'food'){
                        $hrefLinkVar='form_add_food.php';
                    }
                    if($row['type']==='place'){
                        $hrefLinkVar='form_add_place.php';
                    }
                    if($row['type']==='categories'){
                        $hrefLinkVar='form_add_place.php';
                    }
                    if($row['type']==='event'){
                        $hrefLinkVav='form_add_event.php';
                    }



                    echo '<a href="' . '../admin/form_add_' . $row['type'] . '.php?id=' . $row['id'] . '" class="btn btn-info" id="edit">Edit</a>';
                    echo '<a href="' . '../admin/form_add_' . $row['type'] . '.php" class="btn btn-danger" >Delete</a>';

                    if (isset($row['address'])) {

                    echo '<button type="button" class="btn btn-secondary">+</button>';
                }
                } ?>

            </div> <!-- btn-group -->
        </div> <!-- text-right -->
    </div> <!-- card-footer -->
</div> <!-- card -->