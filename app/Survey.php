<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $table = "survey";
    public function header()
    {
        return $this->belongsTo('App\Header');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
