<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navBars = config('db.navBars');
    $movies = config('db.movies');
    $features = config("db.features");
    return view('feed.index', compact('navBars','movies','features'));
})-> name('home');

Route::get('/feed/{id}', function(string $id){
    $navBars = config('db.navBars');
    $movies = config('db.movies');
    $features = config("db.features");
    $show = [];

    foreach($movies as $singleMovie){
        if($singleMovie["id"] == $id) $show = $singleMovie;
    }

    foreach($features as $singleFeature){
        if($singleFeature["id"] == $id) $show = $singleFeature;
    }

    return view('feed.show', compact('navBars','show'));
})->name('show');