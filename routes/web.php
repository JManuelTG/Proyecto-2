<?php

use App\Http\Controllers\ServicioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('servicios', ServicioController::class);//->middleware('auth');

Route::get('servicios/envia-correo/{servicio}',[ServicioController::class, 'notifica_serviciocreado'])->name('servicios.envia-correo');

Route::get('servicios/personal',[ServicioController::class, 'index_personal'])->name('servicios.personal');

Route::get('/landing', function () {
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
