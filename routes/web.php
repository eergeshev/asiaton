<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PdfController;

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
Route::get('/locale/{lang}', [LocalizationController::class, 'setLang'])->name('setlang');

Route::get('/', [IndexController::class, 'index']);
Route::get('/catalog-list', [IndexController::class, 'catalogList']);
Route::get('/catalog/{id}', [IndexController::class, 'catalog']);
Route::get('/catalog-pdf/{id}', [PdfController::class, 'catalog']);
Route::get('/products', [IndexController::class, 'products']);
Route::get('/product-type/{id}', [IndexController::class, 'productType']);
Route::get('/contacts', [IndexController::class, 'contacts']);
Route::get('/success', [IndexController::class, 'success']);
Route::post('/contact-form', [IndexController::class, 'contactForm'])->name('contact-form');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [IndexController::class, 'about'])->name('about');



Route::get('/gallery', function(){
    return view('/gallery');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
