<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    protected $filltable = ['user_id', 'title', 'alias', 'description', 'content', 'images', 'views', 'status'];

    public $timestamps = true;
    
}
