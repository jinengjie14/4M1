<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'state'];

    public $timestamps = false;
}
