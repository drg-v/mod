<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Club extends Model
{
    public function players(){
        return $this->hasMany('App\Player');
    }
}
