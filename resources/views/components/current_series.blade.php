<section class="current_series">
    <h1>Current Series</h1>
    <ul>
        @foreach ($current_serie as $item)
        <li>
            <img src="{{ $item['thumb'] }}" alt="" srcset="">
            <h3>{{ $item['series'] }}</h3>
        </li>
        @endforeach
    </ul>
</section>