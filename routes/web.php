<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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


Route::get('/contacts', [HelloController::class, 'contacts']);

Route::get('/menu', [HelloController::class, 'menu']);

Route::get('/hello', [HelloController::class, 'hello']);

Route::resource('/menu', ProductsController::class);

Route::redirect('/', 'welcome');

Route::resource('/welcome', UsersController::class);

