<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    //
    protected $table = "answers";
    public function question()
    {
        return $this->hasOne('App\Question');;
    }
    public function user()
    {
        return $this->hasOne('App\User');;
    }
}
