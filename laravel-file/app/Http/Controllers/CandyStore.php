<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandyStore extends Controller
{
    public function index($id, $name){
        return 'the user id is '.$id. ' and the name is '.$name;
    }


    public function candy(){
        return view('candy');
    }

    public function about(){
        $names=['aya','sara','saja'];
        return view('about', ['names'=>$names]);
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}
