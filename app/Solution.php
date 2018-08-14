<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['user_id', 'proposal_id', 'name', 'description', 'likes'];

    public function costs() {
        return $this->hasMany('App\Cost');
    }
}
