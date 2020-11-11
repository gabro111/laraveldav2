<?php
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;
use App\Models\car;
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

Route::get('/product/create','\App\Http\Controllers\carController@createCar');
Route::post('/product/add','\App\Http\Controllers\carController@addCar');
Route::get('/product/all','\App\Http\Controllers\carController@viewAllCars');
Route::get('/product/edit','\App\Http\Controllers\carController@editCars');
Route::post('/product/delete','\App\Http\Controllers\carController@deleteCar');
Route::get('/product/editind','\App\Http\Controllers\carController@editCarsIndividual');
Route::post('/product/update','\App\Http\Controllers\carController@updateCar');

