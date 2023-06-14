<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Register page
        try {
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
                'agrement' => ['required', 'boolean'],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'role' => 'user',
                'password' => Hash::make($request->password),
                'agrement' => $request->agrement,
            ]);

            auth()->login($user);

            return redirect('/home');
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' => 'Error with error message: ' . $th->getMessage(),
            ]);
        }
    }
}
