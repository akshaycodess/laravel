<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

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
    // Get all.
    // $ideas = Idea::all();
    // Get according to condition but will not work when their is no value.
    // $ideas = Idea::where('state', '=', request('state'))->get();
    // Get according to condition and will also work when their is no value.
    $ideas = Idea::query()
        ->when(request('state'), function($query, $state) {
            $query->where('state', $state);
        })
        ->get();

    return view('contact',[
        'ideas' => $ideas,
    ]);
});

// Contact post response
Route::post('/contact', function() {
    $idea = request('idea');
    if ($idea) {
        Idea::create([
            'description' => $idea,
            'state' => 'pending',
        ]);
    }

    return redirect('/contact');
});

// Contact delete idea
Route::get('/delete-ideas', function () {
    Idea::truncate();
    return redirect('/contact');
});
