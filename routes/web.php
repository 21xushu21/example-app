<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'page'])->name('user_home');
Route::get('/contact', [PageController::class, 'page_contact'])->name('user_page_contact');
Route::get('/about', [PageController::class, 'page_about'])->name('user_page_about');
Route::get('/services', [PageController::class, 'page_services'])->name('user_page_services');
Route::get('/gallery', [PageController::class, 'page_gallery'])->name('user_page_gallery');

//route CRUD
Route::get('/testimonials','TestimonialsController@index');
