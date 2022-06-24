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

Route::get('/', function () {
    $currentSeriesArray = config('comics');
    $currentSerie = [];

    foreach($currentSeriesArray as $item) {
        $currentSerie[] = $item;
    }

    $data = [
        'current_serie' => $currentSerie,
        'menu'=> [ 
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
        ],
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
        ]
        

    ];
    return view('home', $data);
});
