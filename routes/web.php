<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchResultController;

use App\Http\Controllers\ProductPageController;

use App\Http\Controllers\HomeController;



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

// Route::get('/messages', function () {
//     return 'Hello Nina';
//  });

Route::get('/searchResult', [SearchResultController::class, 'showSelection']);
Route::get('/productPage', [ProductPageController::class, 'showSelection']);
Route::get('/home', [HomeController::class, 'showSelection']);
