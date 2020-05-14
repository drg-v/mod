<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Club;
use App\Player;
use App\Pos;
use Illuminate\Http\Request;

class ClubsController extends Controller{
    public function club(){
        return view("clubs");
    }
    public function team($id){
        $user = Club::find($id);
        $name = $user->name;
        $play = $user->players;
        return view("players", ['name' => $name, 'players' => $play]);
    }
    public function player($id, $id1){
        $user = Player::find($id1);
        $name = $user->name;
        $play = $user->poss;
        return view("player", ['name' => $name, 'positions' => $play]);
    }
    public function player2($id){
        $user = Player::find($id);
        $name = $user->name;
        $play = $user->poss;
        return view("person", ['name' => $name, 'positions' => $play]);
    }
    public function position($id){
        $user = Pos::find($id);
        $name = $user->name;
        $play = $user->players;
        return view("possition", ['name' => $name, 'positions' => $play]);
    }
}
