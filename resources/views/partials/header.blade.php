<header>
    <img src=" {{asset("images/dc-logo.png") }}" alt="" srcset="">
    <ul>  
        <li>
        @foreach ($menu as $item)
            <a href="{{ $item['link'] }}">
            {{ $item['name'] }}
            </a>
        @endforeach
        </li>
    </ul>
    <input type="text">
</header>