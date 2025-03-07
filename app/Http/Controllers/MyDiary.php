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
    public function show(Diary $diarys) {
        return view("diary.show", compact("diarys"));
    }
    public function create(){
        return view("diary.create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required", "max:255"],
            "date" => ["nullable", "date"]
        ]);

        $request['date'] = $request['date'] ?? now()->toDateString();

        Diary::create([
            "title" => $request->title,
            "body" => $request->body,
            "date" => $request->date
        ]);

        return redirect("/diary");
    }
}
