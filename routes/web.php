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
    Route::get('/post/show/{cardId}','show')->name('show');
    Route::post('/up/{cardId}','up')->name('up');
    Route::post('/down/{cardId}','down')->name('down');
    Route::post('/post', 'store')->name('store');
    Route::get('/post/create', 'create')->name('create');
    Route::get('/post/edit/{post}','edit')->name('edit');
    Route::put('/post/update/{post}', 'update')->name('update');
    Route::delete('/card/{cardId}', 'deleteCard')->name('deleteCard');
    Route::delete('/post/photo/{photo}','photoDelete')->name('photoDelete');
});

Route::controller(PrefectureController::class)->middleware(['auth'])->group(function(){
    Route::get('/prefecture/serch', 'serch')->name('serch');
    Route::get('/prefectures/{prefecture_id}', 'index')->name('prefectureIndex');
    Route::post('/prefectures/store/{post}','store')->name('store');
});

Route::controller(TagController::class)->middleware(['auth'])->group(function(){
    Route::get('/tag/create','tag_create')->name('tag_create');
    Route::post('/tag', 'tag_store')->name('tag_store');
    Route::get('/tag/{tag_id}' ,'index')->name('tag_show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

