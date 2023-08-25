<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\TagController;

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
    Route::put('/post/update/{post}', 'update')->name('update');
});

Route::controller(PrefectureController::class)->middleware(['auth'])->group(function(){
    Route::get('/prefectures/{prefecture_id}', 'prefecture')->name('prefecture');
    Route::post('/prefectures/store/{post}','store')->name('store');
    Route::post('/up/{card_id}','up')->name('up');
    Route::post('/down/{card_id}','down')->name('down');
    Route::get('/prefectures/show/{card_id}','show')->name('show');
    /*Route::get('/tag/show/{tag_id}', 'tag_show')->name('tag_show');*/
    Route::delete('/prefectures/{photo}','delete')->name('delete');
    Route::delete('/card/{card_id}', 'delete_card')->name('delete_card');
});

Route::controller(TagController::class)->middleware(['auth'])->group(function(){
    Route::get('/tag/create','tag_create')->name('tag_create');
    Route::post('/tag', 'tag_store')->name('store');
    Route::get('/tag/show/{tag_id}' ,'tag_show')->name('show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

