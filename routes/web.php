<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/tasks', function () {
    return view('tasks');
});
//In "laravel/framework": "^7.0"
// Route::get('/about', 'PagesController@indexaboutus');
// Route::get('/contact', 'PagesController@indexcontactus');

Route::get('/about', [PagesController::class, 'indexaboutus']);
Route::get('/contact', [PagesController::class, 'indexcontactus']);