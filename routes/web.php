<?php

use App\Http\Controllers\routeController;
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
    return view('home');
})->name("bariJa");

Route::prefix(sha1('/laravel/basic/learn/PHP'))->group(function () {

    Route::get('/about',[routeController::class,'aboutPage'])->name('about-us');
    Route::get('/contact',[routeController::class,'contactPage'])->name('contact-us');

});


