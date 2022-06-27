@extends('layouts.app')
@section('main_content')
<div class="hero-banner"></div>
<div class="container">
    <img src="{{$comic['thumb']}}" alt="" srcset="">

    <h1>{{$comic['title']}}</h1>

    <div class="green-box">
        <p>{{$comic['price']}}</p>
        <h4>AVAILABLE</h4>
        <p>Check Availability &darr;</p>
        
    </div>

    <p>{{$comic['description']}}</p>
</div>

    <div class="details-box">
        <div class="container">
            <div class="talent-col">
                <h2>Talent</h2>
                <span>Art by:</span>
                @foreach ($comic['artists'] as $key=> $artist)
                <a href="">{{$artist}}</a>,
                @endforeach
                <br>

                <span>Written by: </span>
                @foreach ($comic['writers'] as $key=> $writer)
                <a href="">{{$writer}}</a>,
                @endforeach

            </div>

            <div class="specs-col">

                <h2>Specs</h2>
                <h3>series</h3>
                <a href="">{{$comic['series']}}</a>
                <h3>us price</h3>
                <p>{{$comic['price']}}</p>
                <h3>one sale date</h3>
                <p>{{$comic['sale_date']}}</p>

            </div>
        </div>
    </div>
@endsection