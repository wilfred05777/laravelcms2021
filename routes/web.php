<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function (){
//     return view('pages/about');
// });

// Route::get('/', [PagesController::class, 'index']);
// Route::get('/', 'PagesController@index');
// Route::get('/', 'App\Http\Controllers\PagesControllers@index');
Route::view('/', 'index');
Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/services', 'pages/services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
