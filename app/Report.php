<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'lat', 'lng', 
    'level', 'type', 'description', 'date', 'confirmations'];


    public function laws()
    {
        return $this->belongsToMany('App\Laws', 'reports_laws', 'report_id', 'law_id');
    }
}
