<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\redirectToPages;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\DashboardController;

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



Route::group(['middleware' => 'auth:web','prefix' => 'admin'],function (){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/categories', \App\Http\Controllers\CategoriesController::class);
    Route::resource('/news', NewsController::class);
});



Route::get('contact', [redirectToPages::class, 'contact'])->name('contact');
Route::get('search', [redirectToPages::class, 'search'])->name('search');
Route::get('categories', [redirectToPages::class, 'categories'])->name('categories');
Route::get('single_post', [redirectToPages::class, 'single_post'])->name('single_post');
Route::get('about', [redirectToPages::class, 'about'])->name('about');
Route::get('index', [redirectToPages::class, 'index'])->name('index');

Route::get('/', [HomeController::class,'getCategories']);
Route::get('/single-post/{id}', [HomeController::class,'getSinglePost'])->name('single.post');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class,'getUserLogin'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class,'login'])->name('user.login');
    Route::post('/user/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('user.logout');
});
