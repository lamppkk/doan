<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = "members";

    protected $filltable = ['name', 'email', 'facebook_id', 'phone', 'address', 'birthdate', 'sex', 'status'];

	protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = false;
	
}
