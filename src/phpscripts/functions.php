<?php
use Carbon\Carbon;

function generateEventCard($row)
{
    $date = new Carbon($row['datetime']);

$output = <<<HTML
    <div class="card mb-3">
        <img class="card-img-top img-fluid" src="{$row['image_path']}"/>
        <div class="card-block">
            <h2 class="card-title">{$row['title']}</h2>
            <p class="card-text">{$row['description']}</p>            
        </div>
        <div class="card-footer text-muted d-flex justify-content-between">
            <p>{$date->diffForHumans()}</p>
            <div class="text-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
HTML;

return $output;
}

function generatePlaceCard($row)
{

$output = <<<HTML
    <div class="card mb-3">
        <img class="card-img-top img-fluid" src="{$row['image_path']}"/>
        <div class="card-block">
            <h2 class="card-title">{$row['name']}</h2>
            <p class="card-text">{$row['description']}</p>            
        </div>
        <div class="card-footer text-muted">
            <p>{$row['address']}</p>
            <p>Opening Hours: {$row['opening_hours']}</p>
            <div class="text-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-secondary">+</button>
                </div>
            </div>
        </div> <!-- card-footer -->
    </div> <!-- card -->
HTML;

return $output;
}

