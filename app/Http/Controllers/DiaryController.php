<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
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

        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated['date'] ?? now()->toDateString(),
            "update_date" => now()->toDateString(),
        ]);

        return redirect("/diary");
    }
    public function edit(Diary $diarys) {
        return view("diary.edit", compact("diarys"));
    }

    public function update(Request $request, Diary $diarys) {
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required", "max:255"],
            "date" => ["required", "date"],
        ]);

        $diarys->update([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated['date'],
            "update_date" => now()->toDateString()
        ]);

        return view("diary.show", compact("diarys"));
    }
    public function destroy(Diary $diarys){
        $diarys->delete();

        return redirect("/diary");
    }

}
