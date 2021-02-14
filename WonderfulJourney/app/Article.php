<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description', 'image', 'created_at', 'updated_at'
    ];
}
