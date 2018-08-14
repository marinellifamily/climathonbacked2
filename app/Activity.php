<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name', 'cost', 'date', 'hour', 'address', 'description', 'reason', 'lat', 'lng'];

    public function sponsors() {
        return $this->hasMany('App\Sponsor');
    }
}
