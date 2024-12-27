<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create () {
        return view('auth.login');
    }

    public function store () {
        $user = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($user)) {
            return back()->withErrors([
                'email' => 'login invalid'
            ])->onlyInput('email');
        }

        request()->session()->regenerate();

        return redirect('jobs');
    }

    public function destroy () {
        Auth::logout();

        return redirect('/');
    }
}
