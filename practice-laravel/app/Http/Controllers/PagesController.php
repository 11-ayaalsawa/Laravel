<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($id, $name){
        return 'the user id is '.$id. ' and the name is '.$name;
    }
}
