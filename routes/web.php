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

$currentSeriesArray = config('comics');
$currentSerie = [];
foreach($currentSeriesArray as $item) {
    $currentSerie[] = $item;
};


Route::get('/', function () use ($menu, $currentSerie) {

    // $currentSeriesArray = config('comics');
    // $currentSerie = [];
    // foreach($currentSeriesArray as $item) {
    //     $currentSerie[] = $item;
    // };

    $data = [
        'menu' => $menu,
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

Route::get('/comics', function() use ($menu, $currentSerie) {
    $data = [
        'menu' => $menu,
        'current_serie'=> $currentSerie
    ];
    return view('comics', $data);
});

Route::get('/characters', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('characters', $data);
});

Route::get('/movies', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('movies', $data);
});

Route::get('/tv', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('tv', $data);
});

Route::get('/games', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('games', $data);
});

Route::get('/collectibles', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('collectibles', $data);
});

Route::get('/videos', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('videos', $data);
});

Route::get('/fans', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('fans', $data);
});

Route::get('/news', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('news', $data);
});

Route::get('/shop', function() use ($menu) {
    $data = [
        'menu' => $menu,
    ];
    return view('shop', $data);
});

Route::get('/details{id}', function($id) use ($menu) {
    $comic = collect(config('comics'));
    $current_comic = $comic->where('id', $id)->first();

    $data = [
        'comic' => $current_comic,
        'menu'=> $menu
    ];
    return view('single-comic', $data);
})->name('single-comic');