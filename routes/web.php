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