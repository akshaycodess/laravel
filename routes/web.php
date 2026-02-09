<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home',[
    'message' => 'Hello',
    'person' => request('person', 'World'),
    'tasks' => [
        'task 1',
        'task 2',
        'task 3',
    ],
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
