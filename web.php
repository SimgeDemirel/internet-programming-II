<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::prefix('member')->group(function (){
    Route::get('/register', [MemberController::class, 'register']);
    Route::get('/login', [MemberController::class,'loginForm']);
    Route::post('login' , [MemberController::class ,'login']);
    Route::get('/lost-password', [MemberController::class, 'lostPassword']);
});
Route::prefix('hafta2')->group(function(){
    Route::get('/haber/ {id?}', function (?int $id=null){
        echo "$id Numaralı Haber İçeriği" ;
    })->name( 'haber-detay');

    Route::get( '/ornek', function (){
        return redirect()->route ('haber-detay');
    });
});


/*
Route::get( '/test' , function () {
echo "DPÜ Route-Test: Get";
});
Route::post(' /test' , function () {
    echo "DPÜ Route-Test: Post";
});

Route::put('/test' , function () {
    echo "DPÜ Route-Test: Put";
});

*/

//CSRF
