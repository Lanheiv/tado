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

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);


Route::get('/diary', [MyDiary::class, 'index']);
Route::get('/diary/{diarys}', [MyDiary::class, 'show']);
