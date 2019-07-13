<?php

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

$examples = [
    'tabs',
    'context-menu',
    'modal',
    'carousel',
    'smooth-scroll',
    'conditional-visibility'
];

collect($examples)->each(function ($uri) use($examples) {
    Route::get($uri, function () use ($uri, $examples) {
        return view("components/$uri")->with('examples', $examples);
    });
});

Route::get('/', function() use($examples) {
    return view('home')->with('examples', $examples);
});

