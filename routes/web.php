<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'home'])->name("home");
Route::get('/login/form', [AuthController::class, 'login'])->name("login_view");
Route::post('/login', [AuthController::class, 'loginUser'])->name("login");
Route::get('/register', [AuthController::class, 'register'])->name("register_view");
Route::post('/registration', [AuthController::class, 'registration'])->name("registration");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

Route::group(['middleware' => 'auth'], function () {

    Route::get('/about', [HomeController::class, 'about'])->name("about");
    Route::get('/team', [HomeController::class, 'team'])->name("team");
    Route::get('/contact', [HomeController::class, 'contact'])->name("contact");

    Route::get('/post', [PostController::class, 'post'])->name('post');
    Route::post('/posting', [PostController::class, "create"])->name("create_post");
    Route::get('/updatepost/{postId}', [PostController::class, "updatePost"])->name("update_post");
    Route::post('/update/{postId}', [PostController::class, "update"])->name("update");
    // Route::get('/blog', [PostController::class, "getAllPost"])->name("blog");
    Route::get('/blog', [PostController::class, "getAllPostByUser"])->name("blog");
    Route::get("/blog/post/{postId}", [PostController::class, "getPostById"])->name("blog_post");
    Route::delete('/delete/post/{postId}', [PostController::class, "deletePost"])->name("delete_post");
    Route::delete('/delete/all', [PostController::class, "deleteAllPost"])->name("delete_all");
});

