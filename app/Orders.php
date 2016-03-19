<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";

    protected $filltable = [
							'member_id', 
							'user_id', 
							'name', 
							'address', 
							'phone', 
							'email', 
							'date', 
							'note', 
							'status' 
	];

    public $timestamps = true;
}
