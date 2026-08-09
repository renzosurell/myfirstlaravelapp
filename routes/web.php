<?php

use Illuminate\Support\Facades\Route;

/*

Route::get('/', function () {
    return view('welcome');
});

Route::view('/','welcome');

Route::get('/', function () {
    return view('welcome', [
    'greetings'=>'Good evening',
    'person'=>'enzo',
    ]);
});

*/

Route::get('/', function () {
    return view('welcome', [
    'greetings'=>'Good evening',
    'person'=>request('person', 'Jane Doe'),
    ]);
});

// add /?person='enzo' on the URL

Route::view('/about','about');
Route::view('/contact','contact');