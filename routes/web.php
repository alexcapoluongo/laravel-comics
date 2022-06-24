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
    $data = [
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
    ];
    return view('home', $data);
});
