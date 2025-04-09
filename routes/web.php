<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return Auth::check() ? view('index') : view('welcome');
});

Route::get('/why', function() { return view('why'); } );
Route::get('/nothing', function() { return view('nothing'); } );

// Saraksta daļa
Route::get('/todos', [ToDoController::class, 'index'])->middleware("auth");
Route::get('/todos/create', [ToDoController::class, 'create'])->middleware("auth");
Route::post('/todos', [ToDoController::class, 'store'])->middleware("auth");

Route::get('/todos/{todo}', [ToDoController::class, 'show'])->middleware("auth");

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->middleware("auth");
Route::put('/todos/{todo}', [ToDoController::class, 'update'])->middleware("auth");

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->middleware("auth");

// Dienasgrāmatas sadaļa
Route::get('/diary', [DiaryController::class, 'index'])->middleware("auth");
Route::get('/diary/create', [DiaryController::class, 'create'])->middleware("auth");
Route::post('/diary', [DiaryController::class, 'store'])->middleware("auth");

Route::get('/diary/{diarys}', [DiaryController::class, 'show'])->middleware("auth");

Route::get('/diary/{diarys}/edit', [DiaryController::class, 'edit'])->middleware("auth");
Route::put('/diary/{diarys}', [DiaryController::class, 'update'])->middleware("auth");

Route::delete('/diary/{diarys}', [DiaryController::class, 'destroy'])->middleware("auth");

// Register sadaļa 
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");

// Login sadaļa
Route::delete('/logout', [SessionController::class, 'destroy']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name("login")->middleware("guest");


