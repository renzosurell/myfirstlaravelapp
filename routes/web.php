<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
    'tasks' => [
        'Wash laundry',
        'Finish Modules',
        'Clean room',
    ],
    ]);
});

Route::view('/about','about');
Route::view('/contact','contact');