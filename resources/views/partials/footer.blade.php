<footer>
    <div class="footer_top">
        <div class="container">
            <div class="footer-lists">
                <div class="col">           
                    @foreach ($footer as $key=>$value)
                    <ul>
                    <h3> {{$key}} </h3>
                        @foreach ($value as $item)
                            <li>  {{ $item['name'] }} </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ipsam fugit ratione labore aut maiores quasi eius eaque similique. Esse rem saepe nisi et laudantium dolore, optio cumque obcaecati velit!</p>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <button>sign-up now!</button>
            <div class="social-list">
                <h3>follow us</h3>
                <ul>
                    <li>f</li>
                    <li>t</li>
                    <li>y</li>
                    <li>p</li>
                    <li>m</li>
                </ul>
            </div>
        </div>
    </div>

    
</footer>