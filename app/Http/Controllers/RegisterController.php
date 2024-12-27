<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        User::create($attributes);

        return redirect('login');
    }
}
