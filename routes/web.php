<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'home'])->name("home");
Route::get('/about', [HomeController::class, 'about'])->name("about");
Route::get('/blog', [HomeController::class, 'blog'])->name("blog");
Route::get('/blogPost', [HomeController::class, 'blogPost'])->name("blogPost");
Route::get('/team', [HomeController::class, 'team'])->name("team");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");
