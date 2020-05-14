<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;
class Player extends Model
{
    public function poss(){
        return $this->belongsToMany('App\Pos','pos_player');
    }
}
