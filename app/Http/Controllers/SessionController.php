<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view("auth.login");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols()]
        ]);

        Auth::attempt($validated);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "email" => "Kautkas ir nepareizi"
            ]);
        }

        $request->session()->regenerate();
        return redirect("/");
    }
    public function destroy() {
        Auth::logout();

        return redirect("/");
    }
}
