<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


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
Route::put('/todos/{todo}', [ToDoController::class, 'update']);

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

// Dienasgrāmatas sadaļa
Route::get('/diary', [DiaryController::class, 'index']);
Route::get('/diary/create', [DiaryController::class, 'create']);
Route::post('/diary', [DiaryController::class, 'store']);

Route::get('/diary/{diarys}', [DiaryController::class, 'show']);

Route::get('/diary/{diarys}/edit', [DiaryController::class, 'edit']);
Route::put('/diary/{diarys}', [DiaryController::class, 'update']);

Route::delete('/diary/{diarys}', [DiaryController::class, 'destroy']);

// Register sadaļa 
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create']);

// Login sadaļa
Route::delete('/logout', [SessionController::class, 'destroy']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);


