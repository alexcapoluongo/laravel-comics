<section class="second_menu">
    <div class="container">
        <ul>
            @foreach ($second_menu as $item)
            <li>
                <img src="/images/{{$item['img']}}" alt="" srcset="">
                {{ $item ['name'] }}
            </li>
            @endforeach
        </ul>
    </div>
</section>