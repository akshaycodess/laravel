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

// Contact render page
Route::get('/contact', function () {
    $ideas = session()->get('ideas', []);
    return view('contact',[
        'ideas' => $ideas,
    ]);
});

// Contact post response
Route::post('/contact', function() {
    $idea = request('idea');
    session()->push('ideas', $idea);

    return redirect('/contact');
});

// Contact delete idea
Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/contact');
});
