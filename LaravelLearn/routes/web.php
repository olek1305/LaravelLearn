<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleBlogs;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [ExampleBlogs::class, 'about']);

Route::resource('blog', BlogController::class);

Route::get('/login', [loginController::class, 'index'])->name('login');

Route::post('/login', [loginController::class, 'handleLogin'])->name('login.submit');
