@extends('layout.app')

@section('blog');
@section('title','shop');

@if (session('status'))
<p>{{session('status')}}</p>       
@endif
<a href="{{url('add-data')}}">Add Data</a>
@foreach ($data as $item)
    <ul>
        <li>{{$item->id}}</li>
        <li>{{$item->title}}</li>
        <li>{{$item->body}}</li>
        <li><a href="{{ url('delete-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a></li>
        <li><a href="{{ url('edit-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Edit</a></li>

    </ul>
@endforeach
<td>
    
</td>

@endsection


