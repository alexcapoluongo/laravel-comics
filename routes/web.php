<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$menu = [ 
    [
    'name'=> 'characters',
    'link'=> 'characters',
    ],
    [
    'name'=> 'comics',
    'link'=> 'comics',
    ],
    [
    'name'=> 'movies',
    'link'=> 'movies',
    ],
    [
    'name'=> 'tv',
    'link'=> 'tv',
    ],
    [
    'name'=> 'games',
    'link'=> 'games',
    ],
    [
    'name'=> 'collectibles',
    'link'=> 'collectibles',
    ],
    [
    'name'=> 'videos',
    'link'=> 'videos',
    ],
    [
    'name'=> 'fans',
    'link'=> 'fans',
    ],
    [
    'name'=> 'news',
    'link'=> 'news',
    ],
    [
    'name'=> 'shop',
    'link'=> 'shop',
    ],
];

$footer = [
    'dc_comics' => [
        [
            'name' => 'Characters',
            'link' => '/characters'
        ],
        [
            'name' => 'Comics',
            'link' => '/comics'
        ],
        [
            'name' => 'Movies',
            'link' => '/movies'
        ],
        [
            'name' => 'TV',
            'link' => '/tv'
        ],
        [
            'name' => 'Games',
            'link' => '/games'
        ],
        [
            'name' => 'Videos',
            'link' => '/videos'
        ],
        [
            'name' => 'News',
            'link' => '/news'
        ],
    ],

    'shop' => [
        [
            'name' => 'Shop DC',
            'link' => '/shop-dc'
        ],
        [
            'name' => 'Shop DC Collectibles',
            'link' => '/shop-dc-collectibles'
        ],
    ],

    'dc' => [
        [
            'name' => 'Terms Of Use',
            'link' => '/terms-of-use'
        ],
        [
            'name' => 'Privacy Policy (New)',
            'link' => '/privacy-policy'
        ],
        [
            'name' => 'Ad Choices',
            'link' => '/ad-choices'
        ],
        [
            'name' => 'advertising',
            'link' => '/advertising'
        ],
        [
            'name' => 'jobs',
            'link' => '/jobs'
        ],
        [
            'name' => 'subscriptions',
            'link' => '/subscriptions'
        ],
        [
            'name' => 'Talent Workshops',
            'link' => '/talent-workshops'
        ],
        [
            'name' => 'CPSC Certificates',
            'link' => '/cpsc-certificates'
        ],
        [
            'name' => 'Ratings',
            'link' => '/ratings'
        ],
        [
            'name' => 'Shop Help',
            'link' => '/shop-help'
        ],
        [
            'name' => 'Contact Us',
            'link' => '/contact-us'
        ],
    ],

    'sites' => [
        [
            'name' => 'DC',
            'link' => '/dc'
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '/mad-magazine'
        ],
        [
            'name' => 'DC Kids',
            'link' => '/dc-kids'
        ],
        [
            'name' => 'DC Universe',
            'link' => '/dc-universe'
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '/dc-power-vise'
        ],
    ]


];
$currentSeriesArray = config('comics');
$currentSerie = [];
foreach($currentSeriesArray as $item) {
    $currentSerie[] = $item;
};


Route::get('/', function () use ($menu, $currentSerie, $footer) {

    // $currentSeriesArray = config('comics');
    // $currentSerie = [];
    // foreach($currentSeriesArray as $item) {
    //     $currentSerie[] = $item;
    // };

    $data = [
        'menu' => $menu,
        'footer' => $footer,
        'current_serie' => $currentSerie,
        'second_menu' => [
            [
                'name'=>'digital comics',
                'img'=> 'buy-comics-digital-comics.png'
            ],
            [
                'name'=>'dc merchandise',
                'img'=> 'buy-comics-merchandise.png'
            ],
            [
                'name'=>'subscription',
                'img'=> 'buy-comics-subscriptions.png'
            ],
            [
                'name'=>'comic shop locator',
                'img'=> 'buy-comics-shop-locator.png'
            ],
            [
                'name'=>'dc power visa',
                'img'=> 'buy-dc-power-visa.svg'
            ]
        ],
    ];

    return view('home', $data);
});

Route::get('/comics', function() use ($menu, $currentSerie, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
        'current_serie'=> $currentSerie
    ];
    return view('comics', $data);
});

Route::get('/characters', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('characters', $data);
});

Route::get('/movies', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('movies', $data);
});

Route::get('/tv', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('tv', $data);
});

Route::get('/games', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('games', $data);
});

Route::get('/collectibles', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('collectibles', $data);
});

Route::get('/videos', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('videos', $data);
});

Route::get('/fans', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('fans', $data);
});

Route::get('/news', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('news', $data);
});

Route::get('/shop', function() use ($menu, $footer) {
    $data = [
        'menu' => $menu,
        'footer' => $footer,
    ];
    return view('shop', $data);
});

Route::get('/details{id}', function($id) use ($menu, $footer) {
    $comic = collect(config('comics'));
    $current_comic = $comic->where('id', $id)->first();

    $data = [
        'comic' => $current_comic,
        'menu'=> $menu,
        'footer' => $footer,
    ];
    return view('single-comic', $data);
})->name('single-comic');