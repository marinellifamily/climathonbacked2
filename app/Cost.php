<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = ['solution_id', 'name', 'description', 'price', 'amount'];
}
