<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\RetiroController;
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
    return view('auth.login');
});




route::get('/afiliado/{empleado}',[AfiliadoController::class,'show']);

route::get('/afiliado/create/',[AfiliadoController::class,'create']);

route::get('/deposito/{empleado}/{idafi}/{nomb}',[DepositoController::class,'index']);

route::get('/deposito/create/{idafi}/{x}/{y}',[DepositoController::class,'create']);

route::get('/retiro/{empleado}/{idafi}',[RetiroController::class,'index']);
route::get('/retiro/{empleado}/{idafi}',[RetiroController::class,'index']);

Route::resource('/empleado','App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');
Route::resource('/retiro','App\Http\Controllers\RetiroController');
Route::resource('/deposito','App\Http\Controllers\DepositoController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
