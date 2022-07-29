<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;

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

Route::post('tweets', [TweetsController::class, 'store']);

Route::get('/dashboard', function () {
    // $tweets = Tweet::latest()->gets();

    // return view('dashboard', ['tweets' => $tweets]);
    return view('dashboard', ['tweets' => auth()->user()->timeline()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';