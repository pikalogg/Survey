<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = "questions";
    public function input_type()
    {
        return $this->belongsTo('App\Input_type');
    }
    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }
    public function option_choice()
    {
        return $this->hasMany('App\Option_choice');
    }
    public function answers()
    {
        return $this->hasMany('App\Answers');
    }
}
