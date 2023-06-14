<?php

namespace App\Http\Controllers\User;

use App\Models\Sport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $sports = Sport::all();
        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        // Get Artticles order by created_at and limit to 10
        $articles = Article::orderBy('created_at', 'desc')->limit(10)->get();


        return view('home', compact('sports', 'user', 'articles'));
    }

    public function profile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('profile', compact('user'));
    }
}
