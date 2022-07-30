<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('tweets', [TweetsController::class, 'index'])->name('dashboard');
    Route::post('tweets', [TweetsController::class, 'store']);

    Route::post('/profiles/{user:name}/follow', [FollowsController::class, 'store']);
});

Route::get('/profiles/{user:name}', [ProfilesController::class, 'show'])->name(
    'profile'
);

Route::get('/dashboard', function () {
    // $tweets = Tweet::latest()->gets();

    // return view('dashboard', ['tweets' => $tweets]);
    return view('dashboard', ['tweets' => auth()->user()->timeline()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
