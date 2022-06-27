
<h2>{{$comic['title']}}</h2>
<p>{{$comic['price']}}</p>
<p>available</p>
<p>{{$comic['description']}}</p>
<h2>talent</h2>
<h3>art by:</h3>

@foreach ($comic['artists'] as $key=> $artist)
 {{$artist}},
@endforeach

<h3>written by:</h3>

@foreach ($comic['writers'] as $key=> $writer)
{{$writer}},
@endforeach

<h2>Specs</h2>
<h3>series</h3>
<p>{{$comic['series']}}</p>
<h3>us price</h3>
<p>{{$comic['price']}}</p>
<h3>one sale date</h3>
<p>{{$comic['sale_date']}}</p>