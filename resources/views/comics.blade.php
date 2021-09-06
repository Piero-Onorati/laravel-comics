@extends('layouts.app')
@section('title', 'DC Homepage')

@section('content')

<section class="comics_page">

    <div class="jumbotron"></div>

    <div class="container">

        <!-- Label -->
        <span class="label">current series</span>

        <!-- Box with all the comics -->
       
        @foreach ($allComics as $comic)

            <div class="card">
                <div class="img-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>

                <span>{{$comic['title']}}</span>
        
                
            </div>
            
        @endforeach

        <!-- Button -->
        <span class="button">Load More</span>
    </div>


</section>


    
@endsection