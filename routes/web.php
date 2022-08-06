<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetLikesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('tweets', [TweetsController::class, 'index'])->name('dashboard');
    Route::post('tweets', [TweetsController::class, 'store']);

    Route::post('/tweets/{tweet}/like', [TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [TweetLikesController::class, 'destroy']);

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])->middleware('can:edit,user');

    Route::get('/explore', ExploreController::class);
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name(
    'profile'
);


Route::get('/dashboard', function () {
    return view('dashboard', ['tweets' => auth()->user()->timeline()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';