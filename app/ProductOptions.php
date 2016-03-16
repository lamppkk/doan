<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOptions extends Model
{
    protected $table = "product_options";

    protected $filltable = ['product_id', 'name', 'value'];

    public $timestamps = true;

    public function product() {
    	return $this->belongTo('App\Products');
    } 
}
