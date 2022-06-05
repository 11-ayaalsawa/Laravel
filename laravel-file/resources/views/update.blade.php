@extends('layout.app')

@section('blog');
@section('title','shop');


<form action="{{url('update-data/id/'.$editor->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{$editor->name}}">
    <label for="price">price</label>
    <input type="text" id="price" name="price" value="{{$editor->price}}">
    <label for="quantity">quantity</label>
    <input type="text" id="quantity" name="quantity" value="{{$editor->quantity}}">
    <button type="submit">update</button>
</form>

@endsection

