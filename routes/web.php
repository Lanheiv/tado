<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

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