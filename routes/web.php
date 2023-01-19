<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller as BaseController;
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

Route::controller(PostController::class)->prefix('blog')->group(function(){
    Route::get('/', 'index')->name('blog');
    Route::get('/{slug}','show');
});

Route::get('/',  [BaseController::class, 'index'])->name('home');
