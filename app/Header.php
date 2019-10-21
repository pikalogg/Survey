<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    //
    protected $table = "survey_headers";
    public function survey()
    {
        return $this->hasOne('App\Survey');
    }
}
