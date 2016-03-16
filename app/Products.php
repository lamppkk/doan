<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    protected $filltable = ['cat_id', 'user_id', 'name', 'alias', 'images', 'content', 'price', 'keywords', 'description', 'status'];

    public $timestamps = true;

    public function category() {
    	return $this->belongTo('App\Categorys');
    } 

    public function user() {
    	return $this->belongTo('App\User');
    } 

    public function pimages() {
    	return $this->hasMany('App\ProductImages', 'product_id');
    } 
	
	public function poptions() {
    	return $this->hasMany('App\ProductOptions', 'product_id');
    }
}
