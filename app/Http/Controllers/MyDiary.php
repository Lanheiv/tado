<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class MyDiary extends Controller
{
    public function index()
    {
        $diary = Diary::all();

        return view("diary.index", compact("diary"));
    }
}
