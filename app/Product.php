<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product{
    public $list;
    public function __construct($list){
        $this->list = $list;
    }
    public function release(){
        return $this->list;
    }
}
