<?php

use App\Http\Controllers\Dashbord\categoriesController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/{name}',[HomeController::class,'show']);
Route::get('/dashbord/categories',[categoriesController::class,'index'])
->name('dashbord.categories.index');
                                                            

