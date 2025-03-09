<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\MyDiary;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function() {
    return view('why');
} );
Route::get('/nothing', function() {
    return view('nothing');
} );

// Saraksta daļa
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::post('/todos', [ToDoController::class, 'store']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);


// Dienasgrāmatas sadaļa
Route::get('/diary', [MyDiary::class, 'index']);
Route::get('/diary/create', [MyDiary::class, 'create']);
Route::post('/diary', [MyDiary::class, 'store']);

Route::get('/diary/{diarys}', [MyDiary::class, 'show']);


