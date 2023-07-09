<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrefectureController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/post', 'store')->name('store');
    Route::get('/post/create', 'create')->name('create');
    Route::get('/post/edit/{post}', 'edit')->name('edit');
    Route::put('/post/update/{post}', 'update')->name('update');
});

Route::controller(PrefectureController::class)->middleware(['auth'])->group(function(){
    Route::get('/prefectures/{prefecture_id}', 'prefecture')->name('prefecture');
    Route::post('/prefectures/store/{post}','store')->name('store');
    Route::post('/up/{post}','up')->name('up');
    Route::post('/down/{post}','down')->name('down');
    Route::get('/prefectures/{post}/{page}','show')->name('show');
    Route::delete('/prefectures/{photo}','delete')->name('delete');
    Route::delete('/post/{post_id}', 'delete_post')->name('delete_post');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

