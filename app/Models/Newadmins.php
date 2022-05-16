<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newadmins extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'phone'
    ];
}
