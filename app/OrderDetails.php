<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = "order_details";

    protected $filltable = [
							'order_id', 
							'product_id', 
							'qty', 
							'price'
	];

    public $timestamps = true;
}
