@extends('layouts.app')

@section('details_content')

@foreach ($current_serie as $item)

<h1>{{ $item['title'] }}</h1>
<p>{{$item['price']}}</p>
<p>available</p>
<p>{{$item['description']}}</p>
<h2>talent</h2>
<h3>art by:</h3>

@foreach ($item['artists'] as $key=> $artist)
 {{$artist}},
@endforeach

<h3>written by:</h3>

@foreach ($item['writers'] as $key=> $writer)
{{$writer}},
@endforeach

<h2>Specs</h2>
<h3>series</h3>
<p>{{$item['series']}}</p>
<h3>us price</h3>
<p>{{$item['price']}}</p>
<h3>one sale date</h3>
<p>{{$item['sale_date']}}</p>
  
<br>
@endforeach

    
@endsection
    