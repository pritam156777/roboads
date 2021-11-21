<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/product', [PageController::class, 'products'])->name('products');
Route::get('/about', [PageController::class, 'about'])->name('about');;
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');;
Route::get('/gallary', [PageController::class, 'gallary'])->name('gallary');;
Route::get('/contact', [PageController::class, 'contact'])->name('contact');;
Route::post('/rent', [PageController::class, 'robotInquiry'])->name('robotInquiry');;
Route::post('/buyRobot', [PageController::class, 'buyRobot'])->name('buyRobot');;







