<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaGeralController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;

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
    return view('principal');
})->name('principal');

Route::resource('/users', UserController::class);
Route::resource('/registros', RegistroController::class);
Route::resource('/equipamentos', EquipamentoController::class);
Route::get('/areageral', [AreaGeralController::class, 'index']);
Route::get('/areageral/equipamentos', [AreaGeralController::class, 'equipamentos']);
Route::get('/areageral/manutencoes', [AreaGeralController::class, 'manutencoes']);

// Route::view('/areageral', 'areageral.index');
// Route::view('/areageral/equipamentos', 'areageral.equipamentos');


