<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrol extends Model
{
    protected $table = 'enrol';

    protected $fillable = ['name', 'main', 'user', 'state', 'score', 'score_json'];

    public $timestamps = false;
}
