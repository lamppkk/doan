<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = "options";

    protected $filltable = ['name', 'value'];

    public $timestamps = false;
}
