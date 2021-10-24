<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/register', [AuthController::class, 'registrationForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [PostController::class, 'showPosts']);
    Route::get('/categories/{category}', [PostController::class, 'showPostFromCategory']);
    Route::get('/authors', [PostController::class, 'showAuthors']);
    Route::get('/authors/{id}', [PostController::class, 'authorPostFromCategory']);
    Route::get('/newpost', [PostController::class, 'newPost']);
    Route::post('/newpost', [PostController::class, 'storePost']);
});
