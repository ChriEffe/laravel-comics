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
    $data = ['comics' => config('comics'), 'nomePagina' => 'DC Comics - Home'];
    return view('guest.home', $data);
})->name('home');

Route::get('thumbs/{id}', function ($id) {
    $collection = collect(config('comics'));
    $comicsThumb = $collection->where('id', $id);

    if ($comicsThumb->count() === 0) {
        abort(404);
    }

    $singleThumb = '';
    foreach ($comicsThumb as $value) {
        $singleThumb = $value;
    }

    return view('guest.thumbs', [
        'comicsThumb' => $singleThumb,
        'nomePagina' => $singleThumb['title']
    ]);
})->name('thumb');

Route::get('/games', function () {
    return view('guest.games');
})->name('games');