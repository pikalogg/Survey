<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option_choice extends Model
{
    //
    protected $table = "option_choices";
    public function question()
    {
        return $this->hasOne('App\Question');;
    }
}
