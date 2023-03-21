<?php

use App\Http\Controllers\DBController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('db' )->group(function (){
    Route::get('select', [DBController::class, 'select']);
    Route::get('detail/{id}', [DBController::class, 'detail']);
    Route::get('add' , [\App\Http\Controllers\DBController::class, 'add']);
    Route::post('insert' , [DBController::class, 'insert']);
    Route::get('delete/{id}',[DBController::class, 'delete']);
});
