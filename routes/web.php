<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('beranda', function () {
    return view('welcome');
});

Route::get('berita/{id}', 'App\Http\Controllers\BeritaController@getBeritaById');
// Route::get('berita{id}', [BeritaController::class, 'getBeritaById']);

Auth::routes(
    ['register' => false]
);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function(){
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('berita', BeritaController::class);

});

Route::get('ck', function () {
    return view('ck');
});
Route::get('detail', function () {
    return view('detail');
});

// Route::get('/comments', [CommentController::class, 'index']);
