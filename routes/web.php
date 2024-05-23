<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', function(){
    return view('form');
});

Route::post('/notes', [NoteController::class, 'store'])->name('post.notes');