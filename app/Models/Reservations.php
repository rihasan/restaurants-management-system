<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'tableno',
    	'date',
    	'time',
    	'noofguest',
    	'status'
    ];
}
