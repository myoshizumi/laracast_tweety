<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('tweets', [TweetsController::class, 'index'])->name('dashboard');
    Route::post('tweets', [TweetsController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])->middleware('can:edit,user');

    Route::get('/explore', [ExploreController::class, 'index']);
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name(
    'profile'
);


Route::get('/dashboard', function () {
    // $tweets = Tweet::latest()->gets();

    // return view('dashboard', ['tweets' => $tweets]);
    return view('dashboard', ['tweets' => auth()->user()->timeline()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';