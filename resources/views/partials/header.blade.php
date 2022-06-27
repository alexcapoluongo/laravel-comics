<header>
    <img src=" {{asset("images/dc-logo.png") }}" alt="" srcset="">
    <ul>  
        <li>
        @foreach ($menu as $item)
            <a href="{{ $item['link'] }}">
            {{-- <a href="{{route('nomeroute')}}"></a> --}}
            {{ $item['name'] }}
            </a>
        @endforeach
        </li>
    </ul>
    <input type="text">
</header>