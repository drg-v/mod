<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer{
    public $login;
    public $password;
   public function __construct( $login, $password){
       $this->login = $login;
       $this->password = $password;
   }
}

