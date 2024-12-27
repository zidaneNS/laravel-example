<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create () {
        return view('auth.register');
    }

    public function store () {
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)->letters()]
        ]);

        $user = User::create($attributes);
        Employer::create([
            'name' => $attributes['name'],
            'user_id' => $user->id
        ]);

        return redirect('login');
    }
}
