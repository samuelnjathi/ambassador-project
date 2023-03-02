<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
 //   return view('welcome');
//});


Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/events', [App\Http\Controllers\PagesController::class, 'events'])->name('events.us');

//Resource for Postse
Route::resource('/blog', PostsController::class);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Path to Admin Dashboard or user dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'redirect'])->name('dashboard');


