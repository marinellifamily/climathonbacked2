<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['option', 'reason', 'north', 'south', 'east', 'west'];
}
