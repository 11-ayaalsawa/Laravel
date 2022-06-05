<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sweet;

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
    
    public function fetch(){
        $data = sweet::all();
        return view('blog', compact('data'));
    }
    public function destroy($id)
    {
        $data = sweet::find($id);
        $data->delete();
        return redirect('blog')->with('status','data Deleted Successfully');
    }

    public function edit($id){
        $editor= sweet::find($id);
        return view('update', compact('editor'));
    }

    public function update(Request $request,$id){
        $editor= sweet::find($id);
        $editor->candy_name = $request->input('title');
        $editor->candy_price = $request->input('body');
        $editor->candy_quantity = $request->input('body');
        $editor->update();
        return redirect('blog')->with('status','data edited Successfully');
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $dataAdd= new sweet();
        $dataAdd->candy_name = $request->input('title');
        $dataAdd->candy_price = $request->input('body');
        $dataAdd->candy_quantity = $request->input('body');
       
        $dataAdd->save();
        return redirect('blog')->with("status","data added successfully");
    }
}
