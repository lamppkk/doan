<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = "categorys";

    protected $filltable = ['name', 'alias', 'order', 'keyword', 'description', 'parent_id'];

    public $timestamps = true;

    public function product() {
    	return $this->hasMany('App\Products');
    } 
}
