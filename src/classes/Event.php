<?php

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $dates = [
        'datetime'
    ];
    public $timestamps = false;
}