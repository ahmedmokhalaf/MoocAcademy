<?php

use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Facebook
    Route::get('login/facebook/callback', 'FacebookController@handleProviderFacebookCallback');
    Route::get('/login/facebook', 'FacebookController@redirectToFacebookProvider');
    // Telegram
    Route::resource('telegramTest', 'TelegramController');
    // Youtube
    Route::get('youtube', 'YoutubeController@index')->name('youtube.index');
});
