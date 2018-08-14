<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = ['important', 'user_id', 'name', 'description',
    'reason', 'lat', 'lng', 'address', 'likes', 'dislikes'];

    public function solutions() {
        return $this->hasMany('App\Solution');
    }
}
