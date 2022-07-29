<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index()
    {

        return view('dashboard', ['tweets' => auth()->user()->timeline()]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);
        return redirect('/dashboard');
    }
}