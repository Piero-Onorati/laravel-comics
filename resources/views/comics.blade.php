@extends('layouts.app')
@section('title', 'DC Homepage')

@section('content')

<h2>This is the product page</h2>


@foreach ($allComics as $comic)

    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">

    <h3>{{$comic['title']}}</h3>
    
@endforeach
    
@endsection