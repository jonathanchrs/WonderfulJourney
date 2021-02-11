<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'id', 'name', 'email', 'phone', 'password', 'role'
    ];
}
