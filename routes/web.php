<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/post', [ContactController::class, 'store'])->name('contact.post');

Route::group(['prefix' => 'auth'], function (){
    Route::get('/register', [AuthentificationController::class, 'register'])->name('register.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
