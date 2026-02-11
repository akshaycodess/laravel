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
Route::view('/contact', 'contact');

// start ideas
// index
Route::get('/ideas', function () {
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

    return view('ideas.index',[
        'ideas' => $ideas,
    ]);
});

// create
Route::post('/ideas', function () {
    $idea_desc = request('description');
    if ($idea_desc) {
        Idea::create([
            'description' => $idea_desc,
            'state' => 'pending',
        ]);
    }
    return redirect('/ideas');
});

// read
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

// update page
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

// update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);
    return redirect("/ideas/{$idea->id}");
});

// delete
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();
    return redirect('/ideas');
});
// end ideas
