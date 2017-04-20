<?php

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $dates = [
        'starts_at'
    ];
    public $timestamps = false;
}