<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
     protected $table = "contacts";

    protected $filltable = ['name', 'email', 'phone', 'content'];

    public $timestamps = true;

}
