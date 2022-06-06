<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function viewblog(){
      $blog2= post::all();
      return view('blog1', compact('blog2'));
  }

  public function destroy($id)
    {
        $data = post::find($id);
        $data->delete();
        $blog2= post::all();
        return view('blog1', compact('blog2'));
        return redirect('blog1')->with('status','data Deleted Successfully');
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->title= $request->input('title');
        $student->body = $request->input('body');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
}
