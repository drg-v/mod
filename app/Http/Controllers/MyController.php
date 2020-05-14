<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class MyController extends Controller{
    public function Custom($id){
        return view('Customer', ['obj' => $id]);
    }
    public function sign(Request $request){
        $login = $request->input("Login");
        $password = $request->input("Password");
        $n = new Customer($login, $password);
        return view('Login', ['OBJ' => $n]);
    }
    public function list(){
        return view('List');
    }
    public function buy(Request $request){
        $book = $request->input("Book");
        $PC = $request->input("PC");
        $Ball = $request->input("Ball");
        $arr = array();
        if($book == 1)
            $arr['Book']='book';
        if($PC == 1)
            $arr['PC']='PC';
        if($Ball == 1)
            $arr['Ball']="Ball";
        $vr = new Product($arr);
        return view('result', ['obj' => $vr->release()]);
    }
}
