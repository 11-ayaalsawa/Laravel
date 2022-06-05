@extends('layout.app')

@section('blog');
@section('title','shop');


<form action="{{ url('add-data') }}" method="post">
    @csrf
   Name<input type="text" name="name">
    Price<input type="text" name="price">
    Quantity<input type="text" name="quantity">
    <button type="submit">Add</button>
</form>

@endsection

