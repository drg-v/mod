<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    public function players(){
        return $this->belongsToMany('App\Player', 'pos_player');
    }
}
