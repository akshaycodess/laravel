<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home',[
    'message' => 'Hello',
    'person' => request('person', 'World'),
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
