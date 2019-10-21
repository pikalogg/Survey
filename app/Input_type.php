<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input_type extends Model
{
    //
    protected $table = "input_types";
    public function question()
    {
        return $this->hasMany('App\Question');
    }
}
