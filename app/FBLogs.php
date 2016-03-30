<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FBLogs extends Model
{
    protected $table = "fb_logs";

    protected $filltable = [
    			'from',
				'to',
				'link',
				'image',
				'content'
    ];

    public $timestamps = true;
}
